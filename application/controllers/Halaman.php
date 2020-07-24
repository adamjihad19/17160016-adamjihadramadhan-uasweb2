<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
            if($this->session->userdata('nama')==""){
                redirect('Login/index'); 
            }

    }

	public function index()
	{        
        $data['name']="Welcome";
        // echo "tes";
         $this->template->load('theme','home',$data);
    }

    public function hallo_admin()
	{    
        $this->load->view('halaman/hallo_admin.php');
    }
    public function hallo_user()

	{    
        $this->load->view('halaman/hallo_user.php');
    }
}