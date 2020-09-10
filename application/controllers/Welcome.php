<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	function __construct()
	{
		 parent::__construct();
		 echo "My Constucter"."</br>";
	}
	public function index()
	{
		//$data['name'] = "somkiat";
		//$data['email'] = "somkiat@gmail.com";
		$data['student'] = array("614259020","somkiat","chokmean","Software Engineering");
        $this->load->view("hello_view",$data);
	}
	public function show($name=null,$lastname=null)
	{
		echo " Hello ".$name. " ".$lastname;
		$this->_display();
	}
	public function _display(){
		echo "</br>"."Softwere Engineering";
	}
}