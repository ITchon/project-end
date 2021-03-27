<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Student extends CI_Controller {
 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->view('header2');
        $this->load->model('model');
        $this->load->view('head_std');
        $this->load->view('sidebar_std');
        
    }
 
 public function index(){
    
    
    $qry_inp =  "SELECT req.req_id,req.req_sex,req.req_glevel,company.cpn_id
    ,company.cpn_name,company.cpn_add,company.cpn_email,company.cpn_phnumber,department.dpm_name,req.req_number
    FROM req
    INNER JOIN company on company.cpn_id = req.cpn_id
    INNER JOIN department on department.dpm_id = req.dpm_id" ;
    $query = $this->db->query($qry_inp); 
    $data['result'] = $query->result();
    $this->load->view('main_menu_std',$data);
 }
 public function index2(){  
         $id = $this->uri->segment('3');
         $std_status = $this->session->userdata('std_status');
         
        $data['result'] = $this->model->select_main_data($id);
      $this->load->view('main_data_std',$data,$std_status);
 }
 public function req(){  
    $req_id = $this->uri->segment('3'); 
    $real_id = $this->session->userdata('real_id');
    $data  = $this->model->chk_insert_req($req_id,$real_id);
    
    if($data != null){
      $this->session->set_flashdata
			('failed','<div class="alert alert-warning">
									<span>  
						<b>คุณได้สมัครเข้าฝึกงานที่นี่แล้ว</span> 
			</div>');
         redirect('student');  
    }else{
      $data1 = $this->model->insert_req($req_id,$real_id);
      $this->session->set_flashdata
			('success','<div class="alert alert-success">
									<span>  
						<b>คุณได้สมัคเข้าฝึกงานเรียบร้อย</span> 
			</div>');
         
         redirect('student');  
    }

		
}


public function index3(){
   $std_id =$this->session->userdata('std_id');
  
   $qry_inp =  "SELECT accept_req.ac_status,accept_req.ac_id,accept_req.ac_status,student.std_id,company.cpn_id,company.cpn_name,company.cpn_add,company.cpn_email,company.cpn_phnumber,
   company.cpn_img
   FROM accept_req
   INNER JOIN student on student.std_id = accept_req.std_id
   INNER JOIN req on req.req_id = accept_req.req_id
   INNER JOIN company on company.cpn_id = req.cpn_id  WHERE student.std_id = $std_id";
   $query = $this->db->query($qry_inp); 
   $data['result'] = $query->result();
   $this->load->view('show_std_cpn',$data);
}





public function delete_student_ac_std($ac_id)
{
 $result = $this->model->del_ac_std_p($ac_id);
 if($result!=FALSE)
 {
       redirect('student/index3','refresh');
 }
 else
 {
     echo "<script>alert('Something wrong')</script>";
      redirect('student','refresh');
 }
}

public function index_priv_std(){
   $std_id = $this->session->userdata('std_id');
  
   $qry_inp =  "SELECT student.std_id,c.cls_name,student.title,student.std_fname,student.std_lname,student.std_code,
   student.std_birthday,student.std_age,student.std_sex,student.std_status,department.dpm_name,student.std_img,student.std_idcard
   FROM student
   LEFT JOIN accept_req on accept_req.std_id = student.std_id
   LEFT JOIN req on req.req_id = accept_req.req_id
   LEFT JOIN company on company.cpn_id = req.cpn_id
   LEFT JOIN class AS c on student.cls_id = c.cls_id
   LEFT JOIN department on department.dpm_id = c.dpm_id
   WHERE student.std_id = $std_id" ;
   $query = $this->db->query($qry_inp); 
   $data['result'] = $query->result();
  
   $this->load->view('private_std',$data);
   
}

public function download(){
  
   $this->load->view('std_download');
   
}
 
 
}
?>