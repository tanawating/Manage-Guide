<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_member extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/index');
                }       
                $this->load->model('Manage_member_model','member_model');
        }
        
        public function index()
        {
                $this->rs = $this->member_model->selectAll();
                $this->load->view('admin/member_view',$this);
        }
        public function add()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $check = $this->member_model->checkInsert($this->input->post('txtUsername'));
                    
                    if($check == TRUE)
                    {
                        $this->session->set_flashdata('Error','<b>Error !! Username ซ้ำกรุณาเปลี่ยนใหม่</b>');
                        redirect('admin_manage_member/index');
                    }else
                    {
                        $this->member_model->insert(array(
                            'am_id'=> (''),
                            'am_username'=> $this->input->post('txtUsername'),
                            'am_password'=> $this->input->post('txtPassword'),
                            'am_name'=> $this->input->post('txtName'),
                            'am_type'=> ('0')
                        ));
                        $this->session->set_flashdata('successAdd','<b>เพิ่มข้อมูลเรียบร้อย</b>');
                        redirect('admin_manage_member/index');
                    }
                } 
        }
        public function viewEdit($am_id)
        { 
                $this->rs= $this->member_model->selectOne($am_id);
                $this->load->view('admin/member_edit_view',$this);
        }
        public function viewOne($am_id)
        { 
                $this->rs= $this->member_model->selectOne($am_id);
                $this->load->view('admin/member_show_view',$this);
        }
        public function edit()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->member_model->update($this->input->post('txtID'));
                    $this->session->set_flashdata('successEdit','<b>แก้ไขข้อมูลเรียบร้อย</b>');
                    redirect('admin_manage_member/viewedit/'.$this->input->post('txtID'));
                } 
        }
        public function remove($am_id)
        {
                $this->member_model->drop($am_id);
                $this->session->set_flashdata('successRemove','<b>ลบข้อมูลเรียบร้อย</b>');
                redirect('admin_manage_member/index');
        }
        
        
}
