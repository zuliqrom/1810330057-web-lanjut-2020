<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	public function index()
	{


		$this->load->view("Mahasiswa/v_index");
	}
	// public function create(){
	// 	$this->load->view('mahasiswa')
	// }

}
