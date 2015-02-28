<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student_gate extends CI_Controller { 
    
    public function __construct() {
        parent::__construct();

        // Disable browser caching
        $this -> output -> set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this -> output -> set_header("Pragma: no-cache");
        
        $this -> load -> model('student_gate_model');
    }
    
    public function index () {
        $this->login();
    }
    
    public function login () {
        if ( $this->session->userdata('is_logged_in') ){
            redirect('student_gate/members');
        } else {
            $this->load->view('system/student_signin');
        }
    }
    
    public function members () {
        if (!$this -> session -> userdata('is_logged_in')) {
            redirect ('student_gate');
        } else {
            redirect('student/lectures');
        }
    }
    
    public function logout () {
        if ($this -> session -> userdata('is_logged_in')) {
            $this -> session -> sess_destroy();
            echo 'You are now logged out! Click <a href="' . base_url('student_gate') . '"> here </a> to exit.';
        } else {
            redirect('student_gate');
        }
    }
    
    public function login_validation () {
       
        // setup validation rules
        $this -> form_validation -> set_rules ('inputStudNumber', 'Student Number' ,'required|xss_clean|callback_validate_login');
        $this -> form_validation -> set_rules ('inputPassword', 'Password', 'required');
       
        // if validation is successful
        if ($this -> form_validation -> run()) {
            $uname = $this -> input -> post('inputStudNumber');
            $upass = $this -> input -> post('inputPassword');
            
            $studDetails = $this -> student_gate_model -> getStudent($uname);
            
            // session data
            $data = array (
                'stud_num'        => $studDetails->stud_num,
                'stud_name'       => $studDetails->lname . ', ' . $studDetails->fname,
                'is_logged_in'    => TRUE
            );
            
            $this -> session -> set_userdata($data);
            redirect('student_gate/members');
        } else {
            $this -> load -> view('system/student_signin');
        }
       
    }
    
    // Callback for login
    public function validate_login() {
        $uname = $this -> input -> post ('inputStudNumber');
        $upass = $this -> input -> post ('inputPassword');
        
        if ($this -> student_gate_model -> can_log_in($uname, $upass)) {
            return TRUE;
        } else {
            $this -> form_validation -> set_message('validate_login', 'Incorrect username/password!');
            return FALSE;
        }
        
    }
}