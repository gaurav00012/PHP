<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

public function index()
{
	
	$this->load->view('user/home');
	

}
public function work()
{
	$this->load->view('user/work');
}
public function projects()
{
	$this->load->view('user/projects');
}

}


?>