<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lectures extends CI_Controller {
    
    public function __construct () {
        parent::__construct();
        
        // Disable browser caching
        $this -> output -> set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this -> output -> set_header("Pragma: no-cache");

        // Default view variables
        $this -> data = array(
            'title' => 'Admin Panel',
            'heading' => 'Welcome ' . $this -> session -> userdata('stud_name'),
            'sub' => ' You can download lectures here from Prelim, Midterm, and Finals',
            'name' => $this -> session -> userdata('stud_name')
        );
        
        // Load lectures model
        $this -> load -> model ('lecture_model');
    }
    
    /**
     * Displays all lectures that can be downloaded
     */
    public function index () {
        if ($this -> session -> userdata('is_logged_in')) {
            
            // Fetch all lectures from prelim, midterm, and finals
            $this->data['lectures'] = array(
                'Prelim' => $this -> lecture_model -> getLecture('Prelim'),
                'Midterm' => $this -> lecture_model -> getLecture('Midterm'),
                'Final' => $this -> lecture_model -> getLecture('Final'),
            );
            
           $this -> load -> view ('system/student_lectures_view', $this->data);
            
        } else {
            redirect('student_gate/');
        }
    }
}

