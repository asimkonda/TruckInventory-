<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{ 

	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Adminmodel');

	$this->load->helper('url');
	}
	

	public function allusers()
		{
		$this->load->model('Adminmodel');
		$data['post']= $this->Adminmodel->Getallusers();
		
		$this->load->view("allusers",$data);
		}
	public function index() {

		$this->load->view('admin');
	}	

	public function addnewuser(){

                 $data = $this->input->post();
                 unset($data['save']);

                 $data = array(
                 	'user_fname' =>$this->input->post('fname') ,
                 	'user_lname' =>$this->input->post('lname') ,
                 	'user_location' =>$this->input->post('location') ,
                 	'user_uname' =>$this->input->post('uname') ,
                 	'user_pwd' =>$this->input->post('pwd') ,

                 	 );
                 
                 //dont need the value of save
                 $this->load->model('Adminmodel');
                 $this->Adminmodel->addnewuser($data);
	}

	
	
	


}
