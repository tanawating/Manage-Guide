<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_enroll extends CI_Controller
{
    
        public function __construct() 
        {
                parent::__construct();
                $this->load->model("home_enroll_model","enroll_model");
                $this->load->model("manage_enroll_model","year_model");
        }
            
        public function index()
        {
                $this->rs = $this->year_model->selectYear();
                $this->load->view('home/enroll/enroll_view',$this);
        }
        public function evidence()
        {
                $this->load->view('home/evidence/evidence_view');
        }
        public function enroll_check()
        {
                $this->load->view("home/enroll/enroll_show_view");
        }
        public function save()
        {   
                $now = date('Y-m-d H:i:s');
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                    $check = $this->enroll_model->checkInsert($this->input->post('identity'));
                    
                    if($check == TRUE)
                    {
                        $this->session->set_flashdata('Error','<b>Error !! เลขบัตรประชาชนนี้มีในระบบแล้ว</b>');
                        redirect('home_enroll/index');
                    }
                    else
                    {
                        $this->enroll_model->insert(array(
                            'en_id'=> $this->input->post(''),
                            'en_prefix'=> $this->input->post('prefix'),
                            'en_fristname'=> $this->input->post('fristname'),
                            'en_lastname'=> $this->input->post('lastname'),
                            'en_identity'=> $this->input->post('identity'),
                            'en_birthday'=> $this->input->post('birthday'),
                            'en_house_number'=> $this->input->post('house_number'),
                            'en_moo'=> $this->input->post('moo'),
                            'en_road'=> $this->input->post('road'),
                            'en_district'=> $this->input->post('district'),
                            'en_amphur'=> $this->input->post('amphur'),
                            'en_city'=> $this->input->post('city'),
                            'en_phone_number'=> $this->input->post('phone_number'),

                            'en_name_father'=> $this->input->post('name_father'),
                            'en_name_mother'=> $this->input->post('name_mother'),
                            'en_brethren'=> $this->input->post('brethren'),
                            'en_person_num'=> $this->input->post('person_num'),
                            'en_parent_phone_number'=> $this->input->post('parent_phone_number'),

                            'en_studying_in_class'=> $this->input->post('studying_in_class'),
                            'en_studying_in_major'=> $this->input->post('studying_in_major'),
                            'en_studying_in_school'=> $this->input->post('studying_in_school'),
                            'en_studying_in_school_amphur'=> $this->input->post('studying_in_school_amphur'),
                            'en_studying_in_school_city'=> $this->input->post('studying_in_school_city'),
                            'en_gpa'=> $this->input->post('gpa'),
                            'en_request_major'=> $this->input->post('request_major'),
                            'en_year_education'=> $this->input->post('year_education'),
                            'en_course'=> $this->input->post('course'),
                            'en_faculty'=> $this->input->post('faculty'),
                            'en_major'=> $this->input->post('major'),
                            'en_university'=> $this->input->post('university'),
                            'en_status'=>('รอตรวจสอบ'),
                            'en_date'=>($now),
                            'en_slip'=>(''),
                            'en_edu1'=>(''),
                            'en_edu2'=>(''),
                            'en_house'=>(''),
                            'en_pic_iden'=>(''),
                            'en_me'=>('')
                        ));
                        $this->session->set_flashdata('successAdd','<b>สมัครเรียนเรียบร้อย</b>');
                        redirect('home_enroll/search_enroll');                        
                    }
                }    
        }
        public function show_enroll()
        {
                $this->load->view("home/enroll/Search_show_view");
        }
        public function search_enroll()
        {
                $this->load->view("home/enroll/search_enroll_view");
        }
        public function send_evidence_enroll()
        {
                $this->load->view("home/enroll/send_evidence_enroll_view");
        }

        
}

