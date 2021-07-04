<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class  Booking_model extends CI_Model {


    public function __construct() {
  
        parent::__construct();

    }

  
  public function insert_booking($data){
        $this->db->insert('bookings',$data);
        return $this->db->insert_id();
    }   

    public function get_all_bookings(){
        $this->db->select();
        $this->db->from('bookings');
        $query = $this->db->get();
        // echo $this->db->last_query();
        if($query->num_rows() > 0) {
            return $query->result();
        } else { 
            return FALSE;
        } 

    }
}