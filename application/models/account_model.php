<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account_model extends CI_Model {

    /**
     * Gets existing password
     */
     public function getPassword () {
         $this->db->select('');
     }
    
    /**
     * Validates admin password.
     * Returns TRUE if password argument matches existing
     * admin password
     * @param1  str  = password input
     * @return bool  = TRUE if password matches existing
     */
    public function validate_password ($password) {
        $this->db->select('salt, the_hash');
        $query = $this->db->get_where('account', array('role' => 'Admin'));
        $row   = $query->row();
        
        $salt  = $row->salt;
        $hash  = $row->the_hash;
        
        $pwhash = hash('sha256', $salt . $password);
        return ($hash == $pwhash);
    }
    
    /**
     * Updates admin password
     * 
     */
     public function updatePassword ($newPassword){
        
        $this->load->model('gate_model');
        
        $salt = $this -> gate_model -> generate_password();
        $hash = hash('sha256', $salt . $newPassword);
        
        $this -> db -> where('role', 'Admin');
        $query = $this->db->update('account', array('the_hash' => $hash, 'salt' => $salt) );
     }
}
