<?php

class AboutController extends CI_Controller
{
	function __construct()
	 {
	  parent::__construct();
	 }

	 function index()
	 {
	 	$this->load->model('common/about');
	 	$aboutInformation = new about();
	 	$data['aboutinfo'] = $aboutInformation -> GetAboutDetails();
	 	$this->load->view('common/About',$data);
	 } 
}