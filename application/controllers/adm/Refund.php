<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refund extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_refund');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'Refund';
    $this->load->view('admin/include/header', $data);


    $this->load->view('admin/v_refund');

    $this->load->view('admin/include/footer');
  }

  function actionrefund()
  {


    if(isset($_POST['cancelrefund'])){
        $config = [
 							'useragent' => 'CodeIgniter',
 							'protocol'  => 'smtp',
 							'mailpath'  => '/usr/sbin/sendmail',
 							'smtp_host' => 'ssl://smtp.gmail.com',
 							'smtp_user' => 'lionairsystem@gmail.com',   // Ganti dengan email gmail Anda.
 							'smtp_pass' => 'lionais1234',             // Password gmail Anda.
 							'smtp_port' => 465,
 							'smtp_keepalive' => TRUE,
 							'smtp_crypto' => 'SSL',
 							'wordwrap'  => TRUE,
 							'wrapchars' => 80,
 							'mailtype'  => 'html',
 							'charset'   => 'utf-8',
 							'validate'  => TRUE,
 							'crlf'      => "\r\n",
 							'newline'   => "\r\n",
 					];
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to('alltimproject@gmail.com');
        $this->email->from('lionair','customer lion');
        $this->email->subject('Permintaan refund dibatalkan');

        $kd_booking = $this->input->post('kode_booking');
        $where = array(
          'tb_booking.kd_booking' => $kd_booking
        );
        $data['showdata'] = $this->m_refund->get_refund_tiket_byBooking($where);


        $html = $this->load->view('v_email', $data, TRUE);

        $this->email->message($html);

        if($this->email->send() ){
          $this->m_refund->deleterefund();
          redirect(base_url('adm/dashboard'));
        }else{
          redirect(base_url('adm/dashboard'));
        }




    }else if(isset($_POST['confirmrefund'])){
        $this->m_refund->confirmrefund();
        redirect(base_url('adm/dashboard'));
    }
  }

  function sendemail()
  {
    $config = [
      'useragent' => 'Codeigniter',
      'protocol'  => 'smtp',
      'mailpath'  => '/usr/sbin/sendemail',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_user' => 'lionairsystem@gmail.com',
      'smtp_pass' => 'lionais1234',
      'smtp_port' => 465,
      'smtp_keepalive' => TRUE,
      'smtp_crypto' => 'SSL',
      'wordwrap'  => TRUE,
      'wrapchars' => 80,
      'mailtype'  => 'html',
      'charset'   => 'utf-8',
      'validate'  => TRUE,
      'crlf'      => "\r\n",
      'newline'   => "\r\n",
    ];

    $this->email->initialize($config);
    $this->email->to('wahyualfarisi30@gmail.com');
    $this->email->from('lionair','customer lion');
    $this->email->subject('Permintaan refund dibatalkan');

    if($this->email->send() ){
      redirect(base_url('adm/dashboard'));
    }else{
      redirect(base_url('adm/dashboard'));
    }


  }





}
