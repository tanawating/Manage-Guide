<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_school extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/index');
                }
                $this->load->model('Manage_school_model','school_model');
        }
        
        public function index()
        {
                $this->rs = $this->school_model->selectAll();
                $this->load->view('admin/school_view',$this);
        }
        public function add()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->school_model->insert(array(
                        'sch_id'=> (''),
                        'sch_name'=> $this->input->post('txtName'),
                        'sch_address'=> $this->input->post('txtAddress'),
                        'sch_tel'=> $this->input->post('txtTel'),
                        'sch_web'=> $this->input->post('txtWeb'),
                        'sch_detail'=> $this->input->post('txtDetail'),
                        'sch_pic'=> ('school.png'),
                        'sch_name_teacher'=> $this->input->post('txtTeacher'),
                        'sch_tel_teacher'=> $this->input->post('txtTelTeacher'),
                        'sch_email'=> $this->input->post('txtEmail'),
                    ));

                    $this->session->set_flashdata('successAdd','<b>เพิ่มข้อมูลเรียบร้อย</b>');
                    redirect('admin_manage_school/index');
                } 
        }
        public function viewEdit($sch_id)
        { 
                $this->rs= $this->school_model->selectOne($sch_id);
                $this->load->view('admin/school_edit_view',$this);
        }
        public function viewOne($sch_id)
        { 
                $this->rs= $this->school_model->selectOne($sch_id);
                $this->load->view('admin/school_show_view',$this);
        }
        public function edit()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->school_model->update($this->input->post('txtID'));

                    $this->session->set_flashdata('successEdit','<b>แก้ไขข้อมูลเรียบร้อย</b>');
                    redirect('admin_manage_school/viewedit/'.$this->input->post('txtID'));
                } 
        }
        public function remove($sch_id)
        {
                $this->school_model->drop($sch_id);
                $this->session->set_flashdata('successRemove','<b>ลบข้อมูลเรียบร้อย</b>');
                redirect('admin_manage_school/index');
        }
        
        
}
