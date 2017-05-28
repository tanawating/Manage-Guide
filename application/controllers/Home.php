<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                $this->load->model("home_model","home");
                $this->load->model("manage_guide_model","guide_model");
        }
            
        public function index()
        {
                $this->rs = $this->guide_model->selectAll();
                $this->load->view("home/home_view",$this);
        }
        public function school()
        {
                $sch_id=$this->uri->segment(3);
                $data['home']= $this->home->getschool();
                $this->load->view('home/home_school_view',$data);
        }
        public function teacher()
        {
                $tc_id=$this->uri->segment(3);
                $data['home']= $this->home->getteacher();
                $this->load->view('home/home_teacher_view',$data);
        }
             
              
} 

