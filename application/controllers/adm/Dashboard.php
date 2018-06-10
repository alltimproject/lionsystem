<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_dashboard');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
   $data['title'] = 'Dashboard';
   $this->load->view('admin/include/header', $data);
   $this->load->view('admin/v_dashboard');
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

}
