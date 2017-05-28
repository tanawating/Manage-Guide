<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_news extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                $this->load->model("home_news_model","news");
        }
        
        public function index()
        {
                $this->rs = $this->news->getall();
                $this->load->view("home/news/news_home_view",$this);
        }
        public function show()
        {
                $n_id=$this->uri->segment(3);
                $data['news']= $this->news->getone();
                $this->load->view('home/news/news_show_view',$data);
                $this->news->update_user_view($n_id = $this->uri->segment(3));
        }

             
            
} 
