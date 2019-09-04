<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$GLOBALS['user'] = null;
		$this->load->view('login');
	}

	public function access(){
		$this->load->model('User');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$incorrectpassword = false;
		$incorrectusername = false;
		if(strlen($password) != 10){
			$incorrectpassword = true;
		}

		for($i=0; $i<9; $i++){
			$charVal = ord(substr($password, $i));
			if( $charVal>57 || $charVal<48){
				$incorrectpassword = true;
			}
		}

		if(!(substr($password, -1) != 'v' || substr($password, -1) != 'V')){
			$incorrectpassword = true;
			echo(substr($password, -1));
		}

		if(!$incorrectpassword){
			$user = array('username'=>$username, 'password'=>$password);
			$correct = $this->User->verifyUser($user);
			if(!$correct['username']){
				echo 'invalid user';
			}else if(!$correct['password']){
				echo 'incorrect password';
			}else{
				$this->load->library('session');
				$this->session->set_userdata(array('user'=>$username));
				echo var_dump($_SESSION);
				$this->load->helper('url');
				redirect(substr(site_url(),0,-1).':'.$_SERVER['SERVER_PORT'].'/PastTransaction');
			}
		}else{
			echo 'password must be your NIC';
		}
	}
}
