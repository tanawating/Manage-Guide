<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_teacher extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/index');
                }
                $this->load->model('Manage_teacher_model','teacher_model');
        }
        
        public function index()
        {
                $this->rs = $this->teacher_model->selectAll();
                $this->load->view('admin/teacher_view',$this);
        }
        public function add()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $check = $this->teacher_model->checkInsert($this->input->post('txtUsername'));
                    if($check == TRUE)
                    {
                        $this->session->set_flashdata('Error','<b>Error !! Username ซ้ำกรุณาเปลี่ยนใหม่</b>');
                        redirect('admin_manage_teacher/index');
                    }
                    else
                    {  
                        $this->teacher_model->insert(array(
                            'tc_id'=> (''),
                            'tc_username'=> $this->input->post('txtUsername'),
                            'tc_password'=> $this->input->post('txtPassword'),
                            'tc_name'=> $this->input->post('txtName'),
                            'tc_lastname'=> $this->input->post('txtLastname'),
                            'tc_tel'=> $this->input->post('txtTel'),
                            'tc_email'=> $this->input->post('txtEmail'),
                            'tc_facebook'=> $this->input->post('txtFacebook'),
                            'tc_pic'=> $this->input->post('txtPic')
                        ));
                        $this->session->set_flashdata('successAdd','<b>เพิ่มข้อมูลเรียบร้อย</b>');
                        redirect('admin_manage_teacher/index');
                    }
                } 
        }
        public function viewEdit($tc_id)
        { 
                $this->rs= $this->teacher_model->selectOne($tc_id);
                $this->load->view('admin/teacher_edit_view',$this);
        }
        public function viewOne($tc_id)
        { 
                $this->rs= $this->teacher_model->selectOne($tc_id);
                $this->load->view('admin/teacher_show_view',$this);
        }
        public function edit()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $config['upload_path']          = './fileupload/teacher';
                    $config['allowed_types']        = 'jpg|png';
                    $config['max_size']             = 100;
                    $config['max_width']            = 1024;
                    $config['max_height']           = 768;
                    $this->load->library('upload', $config);

                    $no_file_error = "<p>You did not select a file to upload.</p>";
                    if(!$this->upload->do_upload('txtPic') && $this->upload->display_errors() != $no_file_error){
                        $checkfile = FALSE;
                    }
                    else
                    {
                        $checkfile = TRUE;
                    }
                    if($checkfile == TRUE)
                    {
                        $this->teacher_model->update($this->input->post('txtID'));
                        $this->session->set_flashdata('successEdit','<b>แก้ไขข้อมูลเรียบร้อย</b>');
                        redirect('admin_manage_teacher/viewedit/'.$this->input->post('txtID'));
                    }
                    else
                    {
                        $error = array('err_filename' => $this->upload->display_errors());
                        $this->session->set_flashdata($error);
                        redirect('admin_manage_teacher/viewedit/'.$this->input->post('txtID'));
                    } 
                } 
      
        }
        public function remove($tc_id)
        {
                $this->teacher_model->drop($tc_id);
                $this->session->set_flashdata('successRemove','<b>ลบข้อมูลเรียบร้อย</b>');
                redirect('admin_manage_teacher/index');
        }
        
        
}
