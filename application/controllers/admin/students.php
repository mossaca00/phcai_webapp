
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Students extends CI_Controller {
     public function __construct () {
        parent::__construct();
        
        // Load the student model
        $this -> load -> model('student_model');
        
        // Disable browser caching
        $this -> output -> set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this -> output -> set_header("Pragma: no-cache");
        
        // Default view variables
        $this->data = array(
            'title'   => 'Students',
            'heading' => 'Manage Students',
            'sub'     => 'Add/Update/Delete Student entries',
            'user'    => $this->session->userdata('role'), 
            'links'   => array (    
                    'Manage Lectures' => base_url('admin/lectures'),
                    'Manage Students' => base_url('admin/students'),
                    'Update Account'  => base_url('admin/account')
                )
        );
    }
    
    
    public function index () {
        $this->home();
    }
    
    
    // Displays form for editing account
    // and students list
    public function home () {
        if ($this->session->userdata('is_logged_in') && $this->session->userdata('role') == 'Admin') {
            
            $this->data['students'] = $this -> student_model -> fetchStudents();
            
            $this->load->view('system/students_view', $this->data);
        } else {
            redirect('gate/');
        }
    }
    
	/**
	 * Adds a new student
	 */
    public function addStudent () {
        $student = array(
            'fname'   => $this -> input -> post('fname'),
            'lname'   => $this -> input -> post('lname'),
            'stud_num' => $this -> input -> post('studNum')
        );
		
        $insertion = $this -> student_model -> addStudent ($student);
		
		if ($insertion) {
			$this -> data['action'] = 'added new student';
	        $this -> data['back']   = base_url('admin/students');
	        $this -> load -> view ('system/other/success', $this->data);
		} else {
			$this->data['errmsg'] = 'Student number already exists!';
			$this->data['back'] = base_url('admin/students');
			$this -> load -> view ('system/other/error', $this->data);
		}
		
    }
    
    
    public function updateStudent() {
        
        $studId = $this -> input -> post('studId');
        
        $updatedStudent = array(
            'fname'    => $this -> input -> post('fname'),
            'lname'    => $this -> input -> post('lname'),
            'stud_num' => $this -> input -> post('studNum')
        );
        
        $this -> student_model -> updateStudent($studId, $updatedStudent);
        $this -> data['action'] = 'updated existing student';
        $this -> data['back']   = base_url('admin/students');
        
        $this -> load -> view ('system/other/success', $this->data);
    }
    
    public function deleteStudent () {
        $studId = $this -> input -> post('studId');
        $this -> student_model -> deleteStudent($studId);
        
        $this -> data['action'] = 'deleted a student';
        $this -> data['back']   = base_url('admin/students');
        
        $this -> load -> view ('system/other/success', $this->data);
    }
}
