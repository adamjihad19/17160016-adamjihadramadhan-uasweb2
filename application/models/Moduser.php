<?php

class Moduser extends CI_Model
{

       function __construct()
    {
     
    }

    public function save($data){
        $this->db->insert('tbl_user_17160016',$data);
    }

    public function update($id_user,$data){
        $this->db->where('id_user',$id_user);
        $this->db->update('tbl_user_17160016',$data);
    }

    public function getid($id_user){
        $this->db->from('tbl_user_17160016');
    	$this->db->where('id_user',$id_user);
    	$query=$this->db->get();
    	if($query->num_rows()>0){
    		return $query->result();
    	}else{
    		return 0;
    	}
    }

    public function read(){  	
    	$query=$this->db->get('tbl_user_17160016');
    	if($query->num_rows()>0){
    		return $query->result();
    	}else{
    		return 0;
    	}
    }
    
    public function delete($id_user){
        $this->db->where('id_user',$id_user);        
        $this->db->delete('tbl_user_17160016');
    }

}