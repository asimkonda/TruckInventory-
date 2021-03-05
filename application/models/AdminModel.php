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

		//$query = "INSERT INTO tbl_user (user_fname, user_lname, user_location, user_pwd,user_uname) VALUES ("$data['fname']", "$data['lname']", "$data['location']", "$data['fname']", "$data['pwd']", "$data['uname']")";
					echo "<pre>";
                     print_r($data['fname'] );

                   echo "</pre>";	
                     exit();

		$this->db->query($query );



                      

			 




	}
	
	}

?>