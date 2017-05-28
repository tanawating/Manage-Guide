<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_evidence extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                if(!isset($_SESSION['identity'])){
                    $this->session->set_flashdata("errorStudent","คุณยังไม่ได้เข้าสู่ระบบ !!");
                    redirect('home_enroll/evidence');
                }
                
                $this->load->model('home_evidence_model','evidence_model');
                
                $config['upload_path']          = './fileupload/evidence';
                $config['allowed_types']        = 'pdf|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);   
        }
            
        public function index()
        {
                $this->rs = $this->evidence_model->select($this->session->userdata('identity'));
                $this->load->view("home/evidence/evidence_home_view",$this);
        }
        public function uploadslip()
        {
                if(isset($_SERVER['REQUEST_METHOD'])== "POST" )
                {
                    if (!$this->upload->do_upload('txtSlip'))
                    {
                        $error = array('err_filename' => $this->upload->display_errors());
                        $this->session->set_flashdata($error);
                        redirect('home_evidence/index');

                    }
                    else
                    {
                        $this->evidence_model->update($this->input->post('en_id'));
                        $this->session->set_flashdata('Editsucsess','<p>บันทึกข้อมูลเรียบร้อยแล้ว</p>');
                        redirect('home_evidence/index');
                    } 
                }                          

        }
        public function uploadedu1()
        {
                if(isset($_SERVER['REQUEST_METHOD'])== "POST" )
                {
                    if (!$this->upload->do_upload('txtEdu1'))
                    {
                        $error = array('err_filename' => $this->upload->display_errors());
                        $this->session->set_flashdata($error);
                        redirect('home_evidence/index');

                    }
                    else
                    {
                        $this->evidence_model->update($this->input->post('en_id'));
                        $this->session->set_flashdata('Editsucsess','<p>บันทึกข้อมูลเรียบร้อยแล้ว</p>');
                        redirect('home_evidence/index');
                    } 
                }                          

        }
        public function uploadedu2()
        {
                if(isset($_SERVER['REQUEST_METHOD'])== "POST" )
                {
                    if (!$this->upload->do_upload('txtEdu2'))
                    {
                        $error = array('err_filename' => $this->upload->display_errors());
                        $this->session->set_flashdata($error);
                        redirect('home_evidence/index');

                    }
                    else
                    {
                        $this->evidence_model->update($this->input->post('en_id'));
                        $this->session->set_flashdata('Editsucsess','<p>บันทึกข้อมูลเรียบร้อยแล้ว</p>');
                        redirect('home_evidence/index');
                    } 
                }                          

        }
        public function uploadhouse()
        {
                if(isset($_SERVER['REQUEST_METHOD'])== "POST" )
                {
                    if (!$this->upload->do_upload('txtHouse'))
                    {
                        $error = array('err_filename' => $this->upload->display_errors());
                        $this->session->set_flashdata($error);
                        redirect('home_evidence/index');

                    }
                    else
                    {
                        $this->evidence_model->update($this->input->post('en_id'));
                        $this->session->set_flashdata('Editsucsess','<p>บันทึกข้อมูลเรียบร้อยแล้ว</p>');
                        redirect('home_evidence/index');
                    } 
                }                          

        }
        public function uploadiden()
        {
                if(isset($_SERVER['REQUEST_METHOD'])== "POST" )
                {
                    if (!$this->upload->do_upload('txtPic_iden'))
                    {
                        $error = array('err_filename' => $this->upload->display_errors());
                        $this->session->set_flashdata($error);
                        redirect('home_evidence/index');

                    }
                    else
                    {
                        $this->evidence_model->update($this->input->post('en_id'));
                        $this->session->set_flashdata('Editsucsess','<p>บันทึกข้อมูลเรียบร้อยแล้ว</p>');
                        redirect('home_evidence/index');
                    } 
                }                          

        }
        public function uploadme()
        {
                if(isset($_SERVER['REQUEST_METHOD'])== "POST" )
                {
                    if (!$this->upload->do_upload('txtMe'))
                    {
                        $error = array('err_filename' => $this->upload->display_errors());
                        $this->session->set_flashdata($error);
                        redirect('home_evidence/index');

                    }
                    else
                    {
                        $this->evidence_model->update($this->input->post('en_id'));
                        $this->session->set_flashdata('Editsucsess','<p>บันทึกข้อมูลเรียบร้อยแล้ว</p>');
                        redirect('home_evidence/index');
                    } 
                }                          

        }
        public function logout()
        {
                $this->session->sess_destroy();
                redirect('home_enroll/evidence');
        }
        
}

