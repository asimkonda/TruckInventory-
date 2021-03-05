<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Adminmodel extends CI_Model 
{


	public function Getallusers()
	{
		$query = $this->db->get('tbl_user');
		if ($query->num_rows()>0){
			return $query->result();
		}
	}
	public function addnewuser($data){

		$this->db->insert('tbl_user',$data );



                      

			 




	}
	
	}

?>