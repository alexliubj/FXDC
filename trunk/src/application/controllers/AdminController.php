<?php

class AdminController extends CI_Controller
{
	function __construct()
	 {
	  parent::__construct();
	 }

	 function index()
	 {
	 	$this->load->model('admin/admin');
	 	$adminData = new admin();
	 	$data = $adminData -> GetAdminInformation();
	 	$this->load->view('admin/adminHome',$data);
	 } 
}