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

/*   $this->form_validation->set_rules('name', 'name', 'required');
                $this->form_validation->set_rules('fname', 'fname', 'required');
                $this->form_validation->set_rules('lname', 'lname', 'required');
                $this->form_validation->set_rules('location', 'location', 'required');
                $this->form_validation->set_rules('pwd', 'pwd', 'required',
                        array('required' => 'You must provide a %s.')
                );
                
                if ($this->form_validation->run() == FALSE)
                {
                        //echo validation_erros();
                }
                else
                {
                     $data['post']== $this->input->post();

                      echo "<pre>";
                      print_r($post);

                      echo "</pre>";
                      exit();
                } */

                
                 $data = $this->input->post();
                 unset($data['save']);//dont need the value of save
                 $this->load->model('Adminmodel');
                 $this->Adminmodel->addnewuser($data);
	}

	/*public function index()
	{
		$this->load->view('allusers');
	}*/

    /*public function adduser()
	{
		 
		if($this->input->post('save'))
		{
		    $data['first_name']=$this->input->post('fname');
			$data['last_name']=$this->input->post('lname');
			$data['email']=$this->input->post('location');
			$data['email']=$this->input->post('pwd');
			$user=$this->Adminmodel>saverecords($data);
			if($user>0){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}   */
	


}
