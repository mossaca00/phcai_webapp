<?php

class student_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Fetches all students
     * 
     */
    public function fetchStudents() {
        $query = $this->db->get('student');
        if ($query->num_rows() == 0) {
            return FALSE;
        }
        return $query;
    }
    
    /**
     * Adds a new Student to DB
     * @param array $studentData - array containing student name & stud number
	 * @return bool TRUE - if data successfully inserted with no dupplicate
     */
    public function addStudent ($studentData) {
		
		$exists = $this -> db -> get_where('student', array('stud_num' => $studentData['stud_num'])) -> num_rows();
        
		
		if (!$exists) { 
        	$this -> db -> insert('student', $studentData);
			return TRUE;
		} else {
			return FALSE;
		}
    }
    
    /**
     * Updates an existing student
     * @param int $studId - Student id
     */
    public function updateStudent ($studId=FALSE, $newStudentData) {
        if ($studId !== FALSE) {
            $this -> db -> where ('id', $studId);
            $this -> db -> update ('student', $newStudentData);
        }
    }
    
    /**
     * Deletes a student based off of their
     * @param int $studId = Student's id
     */
    public function deleteStudent ($studId=FALSE) {
        if ($studId !== FALSE) {
            $this -> db -> delete('student', array('id' => $studId));
        }
    }
    
}
