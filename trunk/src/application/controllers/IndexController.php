<?php

class IndexController extends CI_Controller
{
	function __construct()
	 {
	  parent::__construct();
	 }

	 function index()
	 {
	 	$this->load->model('default/indexpage');
	 	$indexData = new indexpage();
	 	$data['modeldata'] = $indexData -> GetIndexData();
	 	$this->load->view('default/index',$data);
	 } 
}