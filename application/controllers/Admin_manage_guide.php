<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_guide extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/index');
                }
                $this->load->model("manage_guide_model","guide_model");
                $this->load->model("manage_school_model","school_model");
                $this->load->model("manage_teacher_model","teacher_model");
                $this->load->model("manage_enroll_model","yearedu_model");
                $this->load->model("home_model","home");
                $this->rsGuide = $this->guide_model->selectAll();
                $this->rsSchool = $this->school_model->selectAll();
                $this->rsTeacher = $this->teacher_model->selectAll();
                $this->rsYear = $this->guide_model->selectYear();
                $this->rsYearEdu = $this->yearedu_model->selectYear();
        }
        
        public function index()
        {
                $this->load->view('admin/guide_view',$this);
        }
        public function showschool()
        {
                $sch_id=$this->uri->segment(3);
                $data['home']= $this->home->getschool();
                $this->load->view('admin/guide_school_view',$data);
        }
        public function showteacher()
        {
                $tc_id=$this->uri->segment(3);
                $data['home']= $this->home->getteacher();
                $this->load->view('admin/guide_teacher_view',$data);
        }
        public function add()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->guide_model->insert(array(
                        'g_id'=> $this->input->post(''),
                        'tc_id'=> $this->input->post('txtTeacher'),
                        'sch_id'=> $this->input->post('txtSchool'),
                        'g_detail'=> $this->input->post('txtDetail'),
                        'g_date'=> $this->input->post('txtDate'),
                        'g_year'=> $this->input->post('txtYearEdu'),
                        'time'=> $this->input->post('txtTime',"น")
                    ));
                    $this->session->set_flashdata('successAdd','<b>เพิ่มข้อมูลเรียบร้อย</b>');
                    redirect('admin_manage_guide/index');
                } 
        }
        public function viewedit($g_id)
        { 
                $this->rs= $this->guide_model->selectOne($g_id);
                $this->load->view('admin/guide_edit_view',$this);
        }
        public function edit()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->guide_model->update($this->input->post('txtID'));
                    $this->session->set_flashdata('successEdit','<b>แก้ไขข้อมูลเรียบร้อย</b>');
                    redirect('admin_manage_guide/viewedit/'.$this->input->post('txtID'));
                } 
        }
        public function edityear()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->guide_model->updateyear(array('yg_name' => $this->input->post('txtYear')));
                    redirect('admin_manage_guide/index');
                } 
        }
        public function remove($g_id)
        {
                $this->guide_model->drop($g_id);
                $this->session->set_flashdata('successRemove','<b>ลบข้อมูลเรียบร้อย</b>');
                redirect('admin_manage_guide/index');
        }
        
        
}
