<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Students extends CI_Controller {
     public function __construct () {
        parent::__construct();
        
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
    public function home () {
        if ($this->session->userdata('is_logged_in') && $this->session->userdata('role') == 'Admin') {
            $this->load->view('system/students_view', $this->data);
        } else {
            redirect('gate/');
        }
    }
}
