<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	// Email(username), Nic, Role have to be taken as session vars
	public function index()
	{
		$this->load->view('home');
	}
	public function registration()
	{
		if ($this->session->userdata('Email' != '')) {
			redirect(base_url() . 'index.php/Welcome/logout');
		}
		$this->load->view('registration');
	}
	public function register()
	{
		$this->load->model('welcome_model');
		$res = $this->welcome_model->register($this->input->post());
		
	}
	public function login()
	{
		if ($this->session->userdata('Email' != '')) {
			redirect(base_url() . 'index.php/Welcome/logout');
		}
		$this->load->view('loginpage');
	}
	public function verifyuser()
	{
		$this->load->model('welcome_model');
		$login = $this->welcome_model->verifyuser($this->input->post());

		$data = array('Email' => $login['0']['username'], 'Nic' => $login['0']['nic'],  'Role' => $login['0']['role']);
		if (count($login)) {
			$this->session->set_userdata($data);
			if ($login['0']['role'] == 'user') {
				echo "user";
			} else if ($login['0']['role'] == 'admin') {
				echo "admin";
			}
		} else {
			echo false;
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('Email');
		$this->session->unset_userdata('Nic');
		$this->session->unset_userdata('Role');

		redirect(base_url() . 'index.php/Welcome/login');
	}
}
