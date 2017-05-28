<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_evidence extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/index');
                }              
                $this->load->model('manage_evidence_model','evidence_model');
        }
        
        public function index()
        {
                $this->rs = $this->evidence_model->selectAll();
                $this->load->view('admin/evidence_view',$this);
        }
        public function viewOne($en_id)
        { 
                $this->rs= $this->evidence_model->selectOne($en_id);
                $this->load->view('admin/evidence_show_view',$this);
        }
        public function editStatus()
        { 
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->evidence_model->updateStatus($this->input->post('en_id'));
                    $this->session->set_flashdata('successEdit','<b>แก้ไขสถานะเรียบร้อย</b>');
                    redirect('admin_manage_evidence/viewone/'.$this->input->post('en_id'));
                } 
        }

        
        
}
