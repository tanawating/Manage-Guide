<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_topic extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                $this->load->model("home_topic_model","post");
        }
        
        public function index()
        {
                $this->rs = $this->post->getall();  
                $this->load->view("home/topic/topic_home_view",$this); 
        } 
        public function insert()
        {
                $now = date('Y-m-d H:i:s');
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->post->save(array(
                        'top_id'=> $this->input->post(''),
                        'top_title'=> $this->input->post('title'),
                        'top_detail'=> $this->input->post('data'),
                        'top_view'=> ('0'),
                        'top_reply'=> ('0'),
                        'top_user_post'=> $this->input->post('name'),
                        'top_date'=> ($now)
                    ));
                    redirect('home_topic/index');
                } 
        }
        public function show()
        {
                $this->rs = $this->post->getone(); 
                $this->rs2 = $this->post->getone2(); 
                $this->load->view('home/topic/topic_show_view',$this);
                $this->post->update_user_view($top_id = $this->uri->segment(3));
        }
        
        public function user_answer()
        {
                $now = date('Y-m-d H:i:s');
                $top_id = $this->input->post('top_id');
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $this->post->save_user_answer(array(
                    'tre_id'=> (''),
                    'top_id'=> $this->input->post('top_id'),
                    'tre_name'=> $this->input->post('name'),
                    'tre_detail'=> $this->input->post('title'),
                    'tre_date'=> ($now)
                    ));
                    $this->post->update_user_answer($this->input->post('top_id'));
                    echo "<script>window.location='show/$top_id';</script>";
                    redirect('home_topic/show/'.$this->input->post('top_id'));
                }
        }
             
            
} 