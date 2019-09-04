<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	public function verifyUser($user){
		$correct = array('username'=>false,'password'=>false);
		$this->load->database();
		$this->db->get('user');
		$query = $this->db->get_where('user', array('username'=>$user['username']));
		foreach ($query->result() as $row){
			$correct['username'] = true;
        	if($row->password == strtoupper($user['password'])){
        		$correct['password'] = true;
        	}
			
		}
		return $correct;
	}

	public function getAccounts($user){
		$this->load->database();
		$query = $this->db->get_where('account', array('username'=>$user['user']));
		$results = $query->result();
		return($results);
	}
}

?>

