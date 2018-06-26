<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_refund extends CI_Model{

  function get_refund()
  {
    $this->db->select('*');
    $this->db->from('tb_refund');
    $this->db->join('tb_pessenger','tb_pessenger.no_tiket = tb_refund.no_tiket');
    $this->db->where('refund_status', 'on proses');

    return $this->db->get()->result();
  }

  function check_refund_tiket($where)
  {
    $this->db->select('*');
    $this->db->from('tb_refund');
    $this->db->join('tb_pessenger','tb_pessenger.no_tiket = tb_refund.no_tiket');
    $this->db->where($where);
    $this->db->where('refund_status','on proses');

    return $this->db->get();
  }

  function check_penerbangan_kdbooking($where)
  {
    $this->db->select('*');
    $this->db->from('tb_detail');
    $this->db->join('tb_penerbangan', 'tb_penerbangan.no_penerbangan = tb_detail.no_penerbangan');
    $this->db->where($where);

    return $this->db->get()->result();
  }

  function get_booking_kd($kd_booking)
  {
    $this->db->select('*');
    $this->db->from('tb_booking');
    $this->db->where($kd_booking);
    return $this->db->get()->result();
  }

  function get_refund_tiket_byBooking($where)
  {
    $this->db->select('*');
    $this->db->from('tb_pessenger');
    $this->db->join('tb_booking','tb_booking.kd_booking = tb_pessenger.kd_booking');
    $this->db->join('tb_refund', 'tb_refund.no_tiket = tb_pessenger.no_tiket');
    $this->db->where($where);
    $this->db->where('tb_refund.refund_status','on proses');

    return $this->db->get()->result();
  }

  function deleterefund()
  {
    if(isset($_POST['cancelrefund'])){
      $keyrefund = $this->input->post('id_refund');
      for($i=0; $i<count($keyrefund); $i++)
      {
        $this->db->where('no_refund', $keyrefund[$i]);
        $this->db->delete('tb_refund');
      }
    }
  }

  function confirmrefund()
  {
    if(isset($_POST['confirmrefund'])){
      $keyrefund = $this->input->post('id_refund');
      $data = array(
        'refund_status' => 'verify'
      );

      for($i=0; $i<count($keyrefund); $i++)
      {
        $this->db->where('no_refund', $keyrefund[$i]);
        $this->db->update('tb_refund', $data);
      }


    }
  }

}
