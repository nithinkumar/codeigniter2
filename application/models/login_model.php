<?php

class Login_model extends CI_Model{

	function __construct(){
	
	}

	public function verify_user($user,$pass){
		$q=$this
			->db
			->where('username',$user)
			->where('password',$pass)
			->limit(1)
			->get('table');
		if ($q->num_rows > 0){
		
			 $q->row();
			 
		}
		else{return false;}
	}
}