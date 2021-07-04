<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	function __construct()
	{
		parent::__construct();
       
        $this->load->model('booking_model'); 
        $this->load->helper('text'); 
        $this->load->helper('form');  
	}

 
	 
	
 /**
* Save Booking data
* Author : Esar
**/
public function save_booking(){ 
 
 		$name =  $this->input->post('name');
 		$phone =  $this->input->post('phone'); 
	   
		if(empty($name)){   
		 echo FALSE;
		}else{    	 
				$data = array( 
					'name' => $name, //set back to identified  
					'phone' =>$phone, 
					'created_at'=> date('Y-m-d H:i:s'),   
					);  
					
					
			 $this->db->trans_start(); 
             $data_inserted = $this->booking_model->insert_booking($data); 
			 $this->db->trans_complete();
			 
				if ($this->db->trans_status() === FALSE) { 
				 $this->db->trans_rollback();
				 echo FALSE;
				} 
				else { 
				$this->db->trans_commit();
				echo TRUE;
				} 
              
		 
		  } 
 
	}
}
