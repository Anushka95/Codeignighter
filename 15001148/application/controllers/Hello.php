<?php 

class Hello extends CI_Controller{

	public function index(){
		echo"j";	
	}
	public function ha($para, $para2){
		$data = array('ti' =>$para, 'ti2' => $para2);

		$this->load->model('Hemodel','mymodel');
		$data['mda'] = $this->mymodel->getM();
		$this->load->view('header',$data);

	}
}
?>