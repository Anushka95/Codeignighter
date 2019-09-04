<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pastTransaction extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		$user = $this->session->userdata('user');
		$this->load->model('User');
		$accounts = $this->User->getAccounts(array('user'=>$user));
		$this->load->view('pastTransaction',array('accounts'=>$accounts));
	}
}
?>
