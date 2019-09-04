<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Model {
	public function getAllTransactions($user){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM `transaction` WHERE `accountid` =".$user['userid']." and date > '".$user['startdate']."' and date < '".$user['enddate']."'");
		$rows = $query->result();
		return $rows;
	}
}

?>

