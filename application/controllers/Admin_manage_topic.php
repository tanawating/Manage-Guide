<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_topic extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/index');
                }  
                $this->load->model('Manage_topic_model','topic_model');
        }
        
        public function index()
        {
                $this->rs = $this->topic_model->selectAll();
                $this->load->view('admin/topic_view',$this);
        }
        public function viewOne($top_id)
        { 
                $this->rs= $this->topic_model->selectOne($top_id);
                $this->rsc= $this->topic_model->selectComment($top_id);
                $this->load->view('admin/topic_show_view',$this);
        }
        public function remove($top_id)
        {
                $this->topic_model->drop($top_id);
                $this->session->set_flashdata('successRemove','<b>ลบข้อมูลเรียบร้อย</b>');
                redirect('admin_manage_topic/index');
        }
        
        
}
