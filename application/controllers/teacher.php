<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Teacher extends CI_Controller {
 
 
public function __construct()
    {
        parent::__construct();
        $this->load->view('header2');
        $this->load->model('model');
        $this->load->view('head');
        $this->load->view('sidebar');
        

    }
 
 public function index(){
    
    
    $this->load->view('admin_menu');
    $this->model->chk_sessiontch();
    
 }

 public function registerindex(){
    
    
    $this->load->view('add_teacher');
    
    
 }

 public function registertch(){
    $tch_user =  $this->input->post('tch_user');
	$tch_pass=  $this->input->post('tch_pass');
	$tch_name =  $this->input->post('tch_name');
	$tch_tel=  $this->input->post('tch_tel');
    $tch_code =  $this->input->post('tch_code');
    $id = $this->model->insert_registertch($tch_name,$tch_tel,$tch_code);
    $data = $this->model->insert_user($tch_user,$tch_pass,'teacher',$id);
    redirect('login');
 }

 
 
}