<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statement extends CI_Controller {

	public function index()
	{
		$user = array('userid'=>$_GET['accountno'] , 'startdate'=>$_GET['startdate'], 'enddate'=>$_GET['enddate']);
		$this->load->model('Transaction');
		$transactions =  $this->Transaction->getAllTransactions($user);
		//echo var_dump($transactions);
		$this->load->view('statement', array('transactions'=>$transactions));
	}
}
?>