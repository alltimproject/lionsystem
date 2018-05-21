<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'Home | Lion Air';
    $this->load->view('user/include/header', $data);
    $this->load->view('user/v_home');
    $this->load->view('user/include/footer');
  }

  function akun()
  {
    $this->load->view('user/v_akun');
  }

}
