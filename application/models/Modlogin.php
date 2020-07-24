<?php

class Modlogin extends CI_Model{

    public function ceklogin($username,$password){
        $this->db->select('*');
        $this->db->from('tbl_user_17160016');
        $this->db->where('username',$username);
        $this->db->where('password',md5($password));

        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }

    }

   public function auth_admin($username,$password){
    $this->db->select('*');
    $this->db->from('tbl_user_17160016');
    $this->db->where('username',$username);
    $this->db->where('password',md5($password));

    $query=$this->db->get();
    if($query->num_rows()>0){
        return $query->result();
    }else
     {
        return 0;
     }
    }
 
    //cek nim dan password mahasiswa
 public  function auth_user($username,$password){
    $this->db->select('*');
    $this->db->from('tbl_user_17160016');
    $this->db->where('username',$username);
    $this->db->where('password',md5($password));

    $query=$this->db->get();
    if($query->num_rows()>0){
        return $query->result();
    }else
    {
        return 0;
    }
 }
}