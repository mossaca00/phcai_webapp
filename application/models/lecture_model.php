<?php

class Lecture_model extends CI_Model {
    public function __construct () {
        
        // Load the file helper
        $this->load->helper('file');
        
        $this->lecturesPath = './lectures/';
        
    }
    
    
    /**
     * Fetches lectures based off of a term ( Prelim, Midterm, Final )
     * @param str $term   => Term (directory) of the lectures
     * @param str $sortBy => Sort category (date, name, size)
     */
    public function getLecture($term) {
        if (in_array($term, array('Prelim', 'Midterm', 'Final'))) {
            
            // Lectures return
            $lectures = array();
            
            // Build an array of the filenames w/ their info (name, size, date)
            foreach ( get_dir_file_info($this->lecturesPath.$term) as $key => $value) {
                $lectures[] = array (
                    'name' => $value['name'],
                    'size' => $value['size'],
                    'date' => $value['date'],
                    'path' => $value['relative_path']
                );
            }
            
            // Sort the lectures by their date uploaded
            usort($lectures, function ($item1, $item2) {
                if ($item1[ 'date' ] == $item2[ 'date' ] ) return 0;
                return ($item1[ 'date' ] > $item2[ 'date' ]) ? -1 : 1;
            });
            
            return $lectures;
            
        } else {
            return false;
        }
        
    }
}

