<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller{

    public function studentInfo()
    {   $data ['info'] = $this->My_model->getStudent();
        $this->load->view('adminpage/studentInfo',$data);
    }

    public function updateStudentInfo()
    {
        $this->form_validation->set_rules('fname',' Fname','trim|required|min_length[5]|max_length[20]|is_unique[student_info.name]');
        $this->form_validation->set_rules('age', 'Age','trim|required');
        $this->form_validation->set_rules('gender', 'Gender','trim|required');
        $this->form_validation->set_rules('email', 'Email','trim|required|is_unique[student_info.email]');
        $this->form_validation->set_rules('studentnum', 'StudentNo','trim|required|is_unique[student_info.studentNo]');
        if($this->form_validation->run()==false)
        {
            
        }
    }
    
   
    public function displayStdInfo(){
        $StdInfo = $this->My_model->displayStdInfo();
        $json_data ['data'] = $StdInfo;
        echo json_encode($json_data);
        
    }

    public function getStdInfo(){
        $id = $_POST['id'];
        $result = $this->My_model->getStdInfo($id);
        $response = array();
        foreach($result->result() as $row){
           $response = $row;
        }
        echo json_encode($response);

    }

    public function addStdInfo(){
        extract($_POST);
        $this->form_validation->set_rules('fname','Fname','trim|required|min_length[5]|max_length[20]|is_unique[student_info.fullname]');
        $this->form_validation->set_rules('age', 'Age','trim|required');
        $this->form_validation->set_rules('gender', 'Gender','trim|required');
        $this->form_validation->set_rules('email', 'Email','trim|required|is_unique[student_info.email]|valid_email');
        $this->form_validation->set_rules('studentNo', 'StudentNo','trim|required|is_unique[student_info.studentNo]|min_length[9]|max_length[9]');
        if($this->form_validation->run()==true){
            $data = array(
                'studentNo' => $studentNo,
                'fullname' => $fname,
                'gender' => $gender,
                'age' => $age,
                'email' => $email
               );
               $this->My_model->addStdInfo($data);
        }else{
            $form_validation = array(
                'studentNo' => form_error('studentNo'), 
                'email' => form_error('email'),
                'age' => form_error('age'),
                'fname' => form_error('fname'),
                'gender' => form_error('gender'),
                'setstudentNo' => set_value('studentNo'),
                'setfname' => set_value('fname'),
                'setage' => set_value('age'),
                'setgender' => set_value('gender'),
                'setemail' => set_value('email'),
             );
             echo json_encode($form_validation);
        }
        
        
      
    }

    public function deleteStdInfo()
    {
        $id = $_POST['id'];
        $this->My_model->deleteStdInfo($id);
    }

 

}


?>
