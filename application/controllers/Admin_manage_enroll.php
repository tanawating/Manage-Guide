<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_enroll extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/index');
                }              
                $this->load->model('manage_enroll_model','enroll_model');
        }
        
        public function index()
        {
                $this->rs = $this->enroll_model->selectAll();
                $this->rsYear = $this->enroll_model->selectYear();
                $this->load->view('admin/enroll_view',$this);
        }
        public function viewOne($en_id)
        { 
                $this->rs= $this->enroll_model->selectOne($en_id);
                $this->load->view('admin/enroll_show_view',$this);
        }
        public function editYear()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->enroll_model->updateYear($this->input->post('txtYear'));

                    $this->session->set_flashdata('successEdit','<b> Seccess!! บันทึกข้อมูลเรียบร้อย</b>');
                    redirect('admin_manage_enroll/index');
                } 
        }
        
        
}
