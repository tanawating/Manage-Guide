<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_home extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/index');
                }
        }
        
        public function index()
        {
                $this->load->view('admin/home_view');
        }
        public function logout()
        {
                $this->session->sess_destroy();
                redirect('home/index');
        }
        
        
}
