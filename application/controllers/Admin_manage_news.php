<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_manage_news extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['username']))
                {
                    $this->session->set_flashdata("error","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home/index');
                }
                $this->load->model('Manage_news_model','news_model');
        }
        
        public function index()
        {
                $this->rs = $this->news_model->selectAll();
                $this->load->view('admin/news_view',$this);
        }
        public function add()
        {
                $config['upload_path']          = './fileupload/news';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);
                
                $no_file_error = "<p>You did not select a file to upload.</p>";
                if(!$this->upload->do_upload('txtFile') && $this->upload->display_errors() != $no_file_error){
                    $checkfile = FALSE;
                }
                else
                {
                    $checkfile = TRUE;
                }
                if($checkfile == TRUE)
                {
                $this->news_model->insert(array(
                    'n_id'=> (''),
                    'n_titel'=> $this->input->post('txtTitel'),
                    'n_detail'=> $this->input->post('txtDetail'),
                    'n_date'=> (date('Y-m-d H:i:s')),
                    'n_view'=> ('0'),
                    'n_user_post'=> $this->input->post('txtUser'),
                    'n_name_file'=> $this->upload->data('file_name')
                ));
                $this->session->set_flashdata('successAdd','<b>เพิ่มข้อมูลเรียบร้อย</b>');
                redirect('admin_manage_news/index');
                }
                else
                {
                    $error = array('err_filename' => $this->upload->display_errors());
                    $this->session->set_flashdata($error);
                    redirect('admin_manage_news/index');
                } 
        }
        public function viewEdit($n_id)
        { 
                $this->rs= $this->news_model->selectOne($n_id);
                $this->load->view('admin/news_edit_view',$this);
        }
        public function viewOne($n_id)
        { 
                $this->rs= $this->news_model->selectOne($n_id);
                $this->load->view('admin/news_show_view',$this);
        }
        public function edit()
        {
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $config['upload_path']          = './fileupload/news';
                    $config['allowed_types']        = 'pdf';
                    $config['max_size']             = 100;
                    $config['max_width']            = 1024;
                    $config['max_height']           = 768;
                    $this->load->library('upload', $config);

                    $no_file_error = "<p>You did not select a file to upload.</p>";
                    if(!$this->upload->do_upload('txtFile') && $this->upload->display_errors() != $no_file_error){
                        $checkfile = FALSE;
                    }
                    else
                    {
                        $checkfile = TRUE;
                    }
                    if($checkfile == TRUE)
                    {
                    $this->news_model->update($this->input->post('txtID'));
                    $this->session->set_flashdata('successEdit','<b>แก้ไขข้อมูลเรียบร้อย</b>');
                    redirect('admin_manage_news/viewedit/'.$this->input->post('txtID'));
                    }
                    else
                    {
                        $error = array('err_filename' => $this->upload->display_errors());
                        $this->session->set_flashdata($error);
                        redirect('admin_manage_news/viewedit/'.$this->input->post('txtID'));
                    } 
                } 
        }
        public function remove($n_id)
        {
                $this->news_model->drop($n_id);
                $this->session->set_flashdata('successRemove','<b>ลบข้อมูลเรียบร้อย</b>');
                redirect('admin_manage_news/index');
        }
        
        
}
