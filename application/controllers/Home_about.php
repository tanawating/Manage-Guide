<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_about extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                $this->load->model('home_about_model','show');
        }
            
        public function major_teacher()
        {
                $this->rs = $this->show->getall();
                $this->load->view("home/about/about_major_teacher_view",$this);
        }
        public function major_about()
        {
                $this->load->view("home/about/about_major_about_view");  
        }
        public function major_course()
        {
                $this->load->view("home/about/about_major_course_view");
        }
        public function major_structure()
        {
                $this->load->view("home/about/about_major_structure_view");
        }
        public function major_contact()
        {
                $this->load->view("home/about/about_major_contact_view");  
        }
         
        
}   

