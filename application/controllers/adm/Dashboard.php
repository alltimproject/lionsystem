<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_dashboard');
    $this->load->model('admin/m_refund');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
   $data['title'] = 'Dashboard';
   $this->load->view('admin/include/header', $data);

   $data['getkodebooking'] = $this->m_dashboard->getKodebooking();
   $this->load->view('admin/v_dashboard', $data);
   $this->load->view('admin/include/footer');
  }

  function getbooking()
  {
    $data = $this->m_dashboard->getbooking();

    echo json_encode($data);
  }


  function get_passenger_id($kd_booking)
  {
    $where = array(
      'kd_booking' => $kd_booking
    );

    $data['data'] = $this->m_dashboard->get_passenger_id($where);
    $data['kd_booking'] = $kd_booking;
    echo json_encode($data);
  }

  function getpenerbangan_id($kd_booking)
  {
    $where = array(
      'tb_booking.kd_booking' => $kd_booking
    );
    $data = $this->m_dashboard->get_penerbangan_id($where);
    echo json_encode($data);
  }

  function get_refund()
  {
    $data = $this->m_refund->get_refund();
    echo json_encode($data);
  }

  function checkdata($kd_booking)
  {

      $data['title'] = 'Check Data';
      $this->load->view('admin/include/header', $data);

      $where = array(
        'tb_booking.kd_booking' => $kd_booking
      );
      $data['checkdataid'] = $this->m_refund->get_refund_tiket_byBooking($where);

      $this->load->view('admin/v_checkdata', $data);

      $this->load->view('admin/include/footer');


  }

  function getRefundPenerbangan($kd_booking)
  {
    $where = array(
      'kd_booking' => $kd_booking
    );
    $data = $this->m_refund->check_penerbangan_kdbooking($where);
    echo json_encode($data);
  }

  function get_booking_kd($kd_booking)
  {
    $where = array(
      'kd_booking' => $kd_booking
    );
    $data = $this->m_refund->get_booking_kd($where);
    echo json_encode($data);
  }

  function showrefund($kd_booking)
  {
    $where = array(
      'kd_booking' => $kd_booking
    );
    $data['data'] = $this->m_refund->check_refund_tiket($where)->result();
    $data['jumlahdata'] = $this->m_refund->check_refund_tiket($where)->num_rows();
    $data['kd_booking'] = $kd_booking;
    echo json_encode($data);
  }

  function showallrefund()
  {
    echo 'hallosemua';
  }

  function tesjson($kd_booking)
  {
    $where = array(
      'tb_booking.kd_booking' => $kd_booking
    );
    $data = $this->m_refund->get_refund_tiket_byBooking($where);
    echo json_encode($data);
  }

}
