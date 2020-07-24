<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
	{        
        $this->load->view('login_page');
    }

    public function auth(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
       
        $this->load->model('Modlogin');
        $cek_admin=$this->Modlogin->auth_admin($username,$password);
 
        if($cek_admin!=0){
            foreach ($cek_admin as $key => $value) {
                $nama       = $value->name;
                $username   = $value->username;
                $hak_akses = $value->admin;
            }
            $array = array(
                'nama'       => $nama,
                'username'   => $username,
                'hak_akses' => $hak_akses,
                'logged_in'  => TRUE
        );        
        $this->session->set_userdata($array);
        redirect('Halaman/hallo_admin');
        }
        else
        {
            redirect('Login/index'); 

        }
        $cek_user=$this->Modlogin->auth_user($username,$password);
        if($cek_user!=0){
            foreach ($cek_user as $key => $value) {
                $nama       = $value->nama;
                $username   = $value->username;
                $hak_akses = $value->user;
            }
            $array = array(
                'nama'       => $nama,
                'username'   => $username,
                'hak_akses' => $hak_akses,
                'logged_in'  => TRUE
        );        
        $this->session->set_userdata($array);
        redirect('Halaman/hallo_user');
        }
        else
        {
            redirect('Login/index'); 
    }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('Login/index'); 

    }


}