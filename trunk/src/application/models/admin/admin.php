<?php

 class admin extends CI_Model
{
	function GetAdminInformation()
	{
		$data['title'] = 'Alex Test Admin Information';
		$data['todo'] = array('erd','design','coding..');
		return $data;
	}
}



?>