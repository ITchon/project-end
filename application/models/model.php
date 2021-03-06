
<?php

class Model extends CI_Model
{

  


  public function insert_student($title ,$std_fname ,$std_lname ,$std_address ,$std_code ,$std_birthday ,$std_sex ,$std_age ,$cls_id)
        {
            $sql ="INSERT INTO student (
                        cls_id,
                        title,
                        std_fname,
                        std_lname,
                        std_address,
                        std_code,
                        std_birthday,
                        std_age,
                        std_sex,
                        std_status
                        )
                VALUES ('$cls_id','$title','$std_fname','$std_lname','$std_address','$std_code','$std_birthday','$std_age','$std_sex','0');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return $this->db->insert_id();
                }
                else{
                return false;
                } 
        }

        public function edit_class($cls_id ,$cls_name ,$cls_group)
        {
            $sql ="UPDATE class SET  
                                        cls_name ='$cls_name' ,
                                        cls_group ='$cls_group' 
                                        WHERE cls_id = '$cls_id';";          
                $exc = $this->db->query($sql);
                if ($exc)
                {
                return true;  
                }
                else
                {
                return false;
                }
        }

   public function edit_student($title ,$std_fname ,$std_lname ,$std_address ,$std_code ,$std_birthday ,$std_sex ,$std_age ,$cls_id ,$std_id)
        {
            $sql ="UPDATE `student` SET  
                                         cls_id ='$cls_id' ,
                                         title ='$title' ,
                                         std_fname ='$std_fname' ,
                                         std_lname ='$std_lname' ,
                                         std_address ='$std_address' ,
                                         std_code ='$std_code' ,
                                         std_birthday ='$std_birthday' ,
                                         std_age ='$std_age' ,
                                         std_sex ='$std_sex' 
                                        WHERE std_id = '$std_id';";          
                $exc_teacher = $this->db->query($sql);
                if ($exc_teacher)
                {
                return true;  
                }
                else
                {
                return false;
                }
        }


        public function edit_passwd($user_pass ,$user_id )
        {
            $sql ="UPDATE `user` SET  
                                         user_pass ='$user_pass' 
                                          
                                         
                                         
                                        
                                        WHERE user_id = '$user_id';";          
                $exc_teacher = $this->db->query($sql);
                if ($exc_teacher)
                {
                return true;  
                }
                else
                {
                return false;
                }
        }


 public function insert_company($cpn_name ,$cpn_address ,$cpn_email ,$cpn_phnumber)
        {
            $sql ="INSERT INTO company (
                        cpn_name,
                        cpn_address,
                        cpn_email,
                        cpn_phnumber

                        )
                VALUES ('$cpn_name','$cpn_address','$cpn_email','$cpn_phnumber');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return $this->db->insert_id();
                }
                else{
                return false;
                } 
        }

        public function show_main_menu($cpn_name ,$cpn_address ,$cpn_email ,$cpn_phnumber ,$cpn_id )
        {
            $sql ="UPDATE `company` SET  
                                         cpn_name ='$cpn_name' ,
                                         cpn_address ='$cpn_address' ,
                                         cpn_email ='$cpn_email' ,
                                         cpn_phnumber ='$cpn_phnumber' 
                                        
                                        WHERE cpn_id = '$cpn_id';";          
                $exc_teacher = $this->db->query($sql);
                if ($exc_teacher)
                {
                return true;  
                }
                else
                {
                return false;
                }
        }

        public function edit_company($cpn_name ,$cpn_address ,$cpn_email ,$cpn_phnumber ,$cpn_id )
        {
            $sql ="UPDATE `company` SET  
                                         cpn_name ='$cpn_name' ,
                                         cpn_address ='$cpn_address' ,
                                         cpn_email ='$cpn_email' ,
                                         cpn_phnumber ='$cpn_phnumber' 
                                        
                                        WHERE cpn_id = '$cpn_id';";          
                $exc_teacher = $this->db->query($sql);
                if ($exc_teacher)
                {
                return true;  
                }
                else
                {
                return false;
                }
        }
        public function insert_teacher($tch_name ,$tch_tel ,$tch_email,$tch_card)
        {
            $sql ="INSERT INTO teacher (
                        tch_name,
                        tch_tel,
                        tch_email,
                        tch_card
                        )
                VALUES ('$tch_name','$tch_tel','$tch_email','$tch_card');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return $this->db->insert_id();
                }
                else{
                return false;
                } 
        }


        public function edit_teacher($tch_id,$tch_name ,$tch_tel ,$tch_email,$tch_card)
        {
            $sql ="UPDATE `teacher` SET  
                                         tch_name ='$tch_name' ,
                                         tch_tel ='$tch_tel' ,
                                         tch_email ='$tch_email',
                                         tch_card ='$tch_card'
                                        
                                        WHERE tch_id = '$tch_id';";          
                $exc_teacher = $this->db->query($sql);
                if ($exc_teacher)
                {
                return true;  
                }
                else
                {
                return false;
                }
        }
      //   public function chk_sessionadmin() {  
      //     if($this->session->userdata('user_group')!="admin") {
      //       echo "<script>alert('Please Login')</script>";
      //       redirect('login','refresh');
      //       return FALSE;
      
      //     }else{    return TRUE;    }
      // }      

  public function chk_sessionadmin() {  
    if($this->session->userdata('user_group')!="admin") {
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
      return FALSE;

    }else{    return TRUE;    }
}

public function fetch_pass($session_id){
	$fetch_pass=$this->db->query("select * from user_login where id='$session_id'");
	$res=$fetch_pass->result();
	}
	function change_pass($session_id,$new_pass){
	$update_pass=$this->db->query("UPDATE user_login set pass='$new_pass'  where id='$session_id'");
	}


public function chk_sessionstudent() {  
  if($this->session->userdata('user_group')!="student") {
    echo "<script>alert('Please Login')</script>";
    redirect('login','refresh');
    return FALSE;

  }else{    return TRUE;    }
}

  public function chk_sessioncpn() {  
    if($this->session->userdata('cpn_id')=="") {
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
      return FALSE;

    }else{    return TRUE;    }
}

  public function chk_sessiontch() {  
    if($this->session->userdata('tch_id')=="") {
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
      return FALSE;

    }else{    return TRUE;    }
}

public function chk_username_registercpn($username) {  
       
  $sql ="SELECT * FROM user WHERE user_name='$username'";
 $query = $this->db->query($sql);
 if($query->num_rows()!=0) {
  echo '<script language="javascript">';
            echo 'alert("Username alrady exist.");';
            echo 'history.go(-1);';
            echo '</script>';
            exit();
     }
   else{       
   return false;
     }
}

public function chk_login($username,$userpass) {  
       
       $sql ="SELECT * FROM user WHERE user_name='$username' and user_pass='$userpass'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result = $query->result_array();
          return $result[0];  
          }
        else{       
        return false;
          }
}

public function insert_registercpn($cpn_name,$cpn_address,$cpn_email,$cpn_phnumber) {  
        // $pass = base64_encode(trim($pass));
        $sql ="INSERT INTO `company` (`cpn_name`,`cpn_address`,`cpn_email`,`cpn_phnumber`) 
        VALUES ('$cpn_name','$cpn_address','$cpn_email','$cpn_phnumber')";
      $query = $this->db->query($sql);
      if($query) {
          return $this->db->insert_id(); 
          }else{ 
          return false;
          }
      
}

public function insert_registertch($tch_name,$tch_tel,$tch_code) {  
  // $pass = base64_encode(trim($pass));
  $sql ="INSERT INTO `teacher` (`tch_name`,`tch_tel`,`tch_code`) 
  VALUES ('$tch_name','$tch_tel','$tch_code')";
$query = $this->db->query($sql);
if($query) {
    return $this->db->insert_id(); 
    }else{ 
    return false;
    }

}


public function insert_user($user_name,$user_pass,$user_group,$id){ 
  // $pass = base64_encode(trim($pass));
  $sql ="INSERT INTO `user`(`user_name`,`user_pass`,`user_group`,`status`,id) 
  VALUES ('$user_name','$user_pass','$user_group','0','$id')";
$query = $this->db->query($sql);
if($query) {
    return true;  
    }else{ 
    return false;
    }

}

public function get_cpn($cpn_id) {  
  // $pass = base64_encode(trim($pass));
  $sql ="SELECT * FROM company WHERE cpn_id='$cpn_id'"; 
$query = $this->db->query($sql);
$result = $query->result_array();
if($query) {
    return $result;  
    }else{ 
    return false;
    }

}

public function get_tch($tch_id) {  
  // $pass = base64_encode(trim($pass));
  $sql ="SELECT * FROM teacher WHERE tch_id='$tch_id'"; 
$query = $this->db->query($sql);
$result = $query->result_array();
if($query) {
    return $result;  
    }else{ 
    return false;
    }

}

public function block_for_teacher() {  
        if($this->session->userdata('std_id') || $this->session->userdata('contact_id')){
          echo "<script>";
            echo 'alert("Get back");';
            echo 'history.go(-1);';
            echo '</script>';
        }
}

public function block_for_contact() {  
        if($this->session->userdata('std_id') || $this->session->userdata('teacher_id')){
          echo "<script>";
            echo 'alert("Get back");';
            echo 'history.go(-1);';
            echo '</script>';
        }
}

public function chk_teacher($user,$pass) {  
    // $pass = base64_encode(trim($pass));
    $sql ="SELECT * FROM teacher WHERE th_code='$user' and tel='$pass'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result = $query->result_array();
      return $result[0];  
      }
    else{       
    return false;
      }
}

public function chk_admin($user,$pass) {  
    // $pass = base64_encode(trim($pass));
    $sql ="SELECT * FROM admin WHERE username='$user' and password='$pass'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result = $query->result_array();
      return $result[0];  
      }
    else{       
    return false;
      }
}

public function chk_contact($user,$pass) {  
    // $pass = base64_encode(trim($pass));
    $sql ="SELECT * FROM contact WHERE username='$user' and password='$pass'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result = $query->result_array();
      return $result[0];  
      }
    else{       
    return false;
      }
}

public function CheckSession()        
{
  if($this->session->userdata('std_id')){
    if($this->session->userdata('std_id')=="") {
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
  }
}

   else if($this->session->userdata('teacher_id')){
    if($this->session->userdata('teacher_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
   }
    
   else if($this->session->userdata('admin_id')){
    if($this->session->userdata('admin_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
   }

   else if($this->session->userdata('contact_id')){
    if($this->session->userdata('contact_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
   }

   else if($this->session->userdata('fname') == ''){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
   }
    else{    return TRUE;    }
}

public function del_user_p($user_id)
{

  $sqlEdt = "DELETE FROM user WHERE id = '$user_id';";


  $exc_teacher = $this->db->query($sqlEdt);
 
  if ($exc_teacher ){
    
    return true;  
    
  }else{  return false; }
}


public function del_std_p($std_id)
{

  $sqlEdt = "DELETE FROM student WHERE std_id = '$std_id';";


  $exc_teacher = $this->db->query($sqlEdt);
 
  if ($exc_teacher ){
    
    return true;  
    
  }else{  return false; }
}
public function del_cpn_p($cpn_id)
{

  $sqlEdt = "DELETE FROM company WHERE cpn_id = '$cpn_id';";


  $exc_teacher = $this->db->query($sqlEdt);
 
  if ($exc_teacher ){
    
    return true;  
    
  }else{  return false; }
}


public function del_tch_p($tch_id)
{

  $sqlEdt = "DELETE FROM teacher WHERE tch_id = '$tch_id';";


  $exc_teacher = $this->db->query($sqlEdt);
 
  if ($exc_teacher ){
    
    return true;  
    
  }else{  return false; }
}
// public function CheckSession()        
// {
//   if($this->session->userdata('fname')=="") {
//     echo "<script>alert('Please Login')</script>";
//     redirect('login','refresh');
//  return FALSE;
 
//   }else{    return TRUE;    }
  
// }
 public function del_user($id)
 {
  $sql = "SELECT * FROM user WHERE user_id = '$id';";
  $query = $this->db->query($sql); 
  $data  = $query->result(); 
  $data[0]->user_group;
  if($data[0]->user_group == "student"){
    $std_id = $data[0]->id;
    $sqlEdt = "DELETE FROM student WHERE std_id = '$std_id';";
  }else if($data[0]->user_group == "teacher"){
    $tch_id = $data[0]->id;
    $sqlEdt = "DELETE FROM teacher WHERE tch_id = '$tch_id';";
  }else if($data[0]->user_group == "company"){
    $cpn_id = $data[0]->id;
    $sqlEdt = "DELETE FROM company WHERE cpn_id = '$cpn_id';";
  }else{
    echo "ข้อมูลผิดพลาด";
    exit;
  }
  $exc = $this->db->query($sqlEdt);
  $sql = "DELETE FROM user WHERE user_id = '$id';";
  $exc = $this->db->query($sql);
 
  if ($exc){
    
    return true;  
    
  }else{  return false; }
 }

 public function selectOneclass($id)
 {
  $sql="SELECT * FROM class WHERE cls_id = '$id' ";
  $query = $this->db->query($sql); 
  $data  = $query->result(); 

  return $data;
 }
 
 public function selectOnestudent($id)
 {
  $sql="SELECT * FROM student WHERE std_id = '$id' ";
  $query = $this->db->query($sql); 
  $data  = $query->result(); 

  return $data;
 }
 public function selectOnecompany($id)
 {
  $sql="SELECT * FROM company WHERE cpn_id = '$id' ";
  $query = $this->db->query($sql); 
  $data  = $query->result(); 

  return $data;
 }


 public function selectOneteacher($id)
 {
  $sql="SELECT * FROM teacher WHERE tch_id = '$id' ";
  $query = $this->db->query($sql); 
  $data  = $query->result(); 

  return $data;
 }

 public function selectOnepass($id)
 {
  $sql="SELECT * FROM user WHERE user_id = '$id' ";
  $query = $this->db->query($sql); 
  $data  = $query->result(); 

  return $data;
 }

 public function select_main_data($id)
 {
  $sql="SELECT req.req_id,company.cpn_id,company.cpn_name,company.cpn_img,company.cpn_address,company.cpn_email,company.cpn_phnumber,req.req_number
  FROM company
  INNER JOIN req on req.cpn_id = company.cpn_id WHERE company.cpn_id = $id";
  $query = $this->db->query($sql); 
  $data  = $query->result(); 

  return $data;
 }

 public function save_new_pass($pass1,$id) {  
  $sql ="update user set user_pass = '$pass1', status = 1 where user_id = '$id'";
  $query = $this->db->query($sql);
  if($query) {
    return true;  
    }
  else{       
    return false;
    }
}

public function chk_insert_req($req_id ,$real_id )
        {
            $sql ="SELECT * FROM accept_req WHERE req_id = '$req_id' AND std_id ='$real_id' ";          
                $query = $this->db->query($sql);
                $data  = $query->result(); 
                if($query)
                {
                return $data;
                }
                else{
                return false;
                } 
        }


public function insert_req($req_id ,$real_id )
        {
            $sql ="INSERT INTO accept_req (
                        std_id,
                        req_id,
                        ac_status

                        )
                VALUES ('$real_id','$req_id','0');";          
                $query = $this->db->query($sql);
                
                
                if($query)
                {
                return true;
                }
                else{
                return false;
                } 
        }

        public function accept_std($std_id)
        {
          
            $sql ="UPDATE student SET  

                                        std_status ='1'
                                         
                                        WHERE std_id = '$std_id'";          
                $exc = $this->db->query($sql);
                if ($exc)
                {
                return true;  
                }
                else
                {
                return false;
                }
        }








}



?>
