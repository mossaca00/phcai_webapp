<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lectures extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        // Load lecture_model
        $this->load->model('lecture_model');
        
        // Disable browser caching
        $this -> output -> set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this -> output -> set_header("Pragma: no-cache");

        // Default view variables
        $this -> data = array(
            'title' => 'Lectures', 
            'heading' => 'Manage Lectures', 
            'sub' => 'Upload/Delete lectures for your students', 
            'user' => $this -> session -> userdata('role'), 
            'links' => array(
                'Manage Lectures' => base_url('admin/lectures'),
                'Manage Students' => base_url('admin/students'), 
                'Update Account' => base_url('admin/account'))
            );
            
        // Lecture upload configuration array
        $this->uploadConf = array (
            'upload_path'   => './lectures/',
            'allowed_types' => 'pdf|ppt|doc|html|txt',
            'max_size'      => '15000',
            'max_width'     => '1024',
            'max_height'    => '1000',
            'overwrite'     => TRUE
        );
        
    }

    public function index() {
        $this -> home();
    }

    // Displays all lectures per term and an upload form for uploading
    public function home() {
        if ($this -> session -> userdata('is_logged_in') && $this -> session -> userdata('role') == 'Admin') {
            
            // upload error message 
            $this->data['error'] = '';
            
            // load directory helper
            $this->load->helper('file');
            
            $this->data['lectures'] = array(
                'Prelim'  => $this->lecture_model->getLecture('Prelim'),
                'Midterm' => $this->lecture_model->getLecture('Midterm'),
                'Final'   => $this->lecture_model->getLecture('Final')
            );

            // load the lectures view
            $this -> load -> view('system/lectures_view', $this -> data);
            
        } else {
            redirect('gate/');
        }
    }
    
    public function do_upload() {
        
        // Fetch the term (prelim, midterm, final) from the POST request of upload form
        $term = ucfirst( $this->input->post('term') );
        
        // Modify the upload directory based off of the term
        // Concatenate term string into the upload path
        $this->uploadConf['upload_path'] .= $term;
        
        $this->load->library('upload', $this->uploadConf);
        
        if (! $this->upload->do_upload('lecture')) {
            $this->data['error'] = $this->upload->display_errors();
            $this->load->view('system/lectures_view', $this->data);
            
        } else {
            $this->data['uploadInfo'] = $this->upload->data();
            $this->data['term'] = $this->input->post('term');
            $this->load->view('system/other/upload_success', $this->data);
        }
    }
    
    public function deleteLecture() {
        $lecturePath = $this->input->post('lecturePath');
        unlink($lecturePath);
        redirect('admin/lectures');
    }
    
   

}
