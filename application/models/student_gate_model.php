<?php

class Student_gate_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Returns TRUE of FALSE depending on login
     * @param1 str $username
     * @param2 str $password 
     * @return bool - login success
     */
    public function can_log_in($uname, $upass) {
        
        $query = $this -> db -> get_where('student', array('stud_num' => $uname, 'lname' => $upass) );
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }
    
    /**
     * Fetches student data based off of student number
     */
    public function getStudent ($studNum) {
        $query = $this -> db -> get_where ('student', array('stud_num' => $studNum));
        
        if ($query->num_rows() > 0) {
           return $query->row();
        }
        return FALSE;
    }
    
}
