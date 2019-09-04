<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index(){
		$params = array(
			"sucess"=>false,
			"failed"=>false,
			"invalid"=>array(
				"user_name"=>false,
				"first_name"=>false,
				"last_name"=>false,
				"password"=>false,
				"confirm_password"=>false,
				"email"=>false));
		$this->load->view('registration', $params);
	}


	public function submitRegistration(){

		$params = array(
			"sucess"=>false,
			"failed"=>false,
			"invalid"=>array(
				"user_name"=>false,
				"first_name"=>false,
				"last_name"=>false,
				"password"=>false,
				"confirm_password"=>false,
				"email"=>false));
		if($_POST["password"] != $_POST["confirm_password"]){
			$params['failed'] = true;
			$params['invalid']['confirm_password'] = true;
		}
		if($_POST["user_name"] == ""){
			$params['failed'] = true;
			$params['invalid']['user_name'] = true;
		}
		if($_POST["first_name"] == ""){
			$params['failed'] = true;
			$params['invalid']['first_name'] = true;
		}
		if($_POST["last_name"] == ""){
			$params['failed'] = true;
			$params['invalid']['last_name'] = true;
		}
		if($_POST["password"] == ""){
			$params['failed'] = true;
			$params['invalid']['password'] = true;
		}
		if($_POST["email"] == ""){
			$params['failed'] = true;
			$params['invalid']['email'] = true;
		}

		$this->load->model('User');
		if(!$params['failed'] && $this->User->addNewUser($_POST)){
			$params['sucess'] = true;
			$this->load->view('registration', $params);
		}else{
			$params['failed'] = true;
			$this->load->view('registration', $params);
		};
	}
}
?>