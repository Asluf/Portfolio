<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{ 
  
  public function index()
  {
    $this->load->view('home');
  }

  public function sendData()
  {
    $this->load->model('admin_model');
    $res = $this->admin_model->insertData($this->input->post());
  }
  public function chooseTem($x)
  {
    $data['id'] = $x;
    $this->load->view('template', $data);
  }
  

  // Madhu start
 
  // Madhu end
}
