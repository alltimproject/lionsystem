<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model{

  function getbooking()
  {
    $this->db->distinct('tb_booking.kd_booking');
    $this->db->select('tb_booking.kd_booking,
                       tb_booking.tgl_booking,
                       tb_booking.tipe_booking,
                       tb_booking.status
                       ');
    $this->db->from('tb_booking');
    $this->db->join('tb_pessenger', 'tb_pessenger.kd_booking = tb_booking.kd_booking','left');
    return $this->db->get()->result();
  }

  function get_passenger_id($kd_booking)
  {
    $this->db->select('*');
    $this->db->from('tb_pessenger');
    $this->db->where($kd_booking);

   return $this->db->get()->result();
  }

}
