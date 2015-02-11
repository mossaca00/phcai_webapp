<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gate_model extends CI_Model {
        
    /**
     * Returns TRUE or FALSE depending on login
     * @param1 str  = user email
     * @param2 str  = password
     * @return bool = login success
     */
    public function can_log_in($email, $pass){
        
        $query = $this->db->get_where('account', array('email' => $email));
        $row = $query->row();
        
        $salt = $row->salt;
        $hash = $row->the_hash;
        $pwhash = hash('sha256', $salt . $pass);
        
        return ($hash == $pwhash);
        
    }
    
    /**
     *  Gets role of an account based on email
     *  @param1 str = email account
     *  @return str = role of the account
     */
     public function getRole ($email) {
         $this->db->select('role');
         $query = $this->db->get_where('account', array('email' => $email));
         
         return $query->row()->role;
     }
    
    // Initialize an admin account
    public function initAccount ($name, $email, $pass) {
        // 1. Generate a salt using CSPRING
        $salt = $this->generate_password();
        
        // 2. Prepend the salt to the password to create a hash with sha256
        $hash = hash('sha256', $salt . $pass);
        
        // 3. Save both salt and hash to DB
        $data = array(
            'name' => $name,
            'email' => $email,
            'the_hash' => $hash,
            'salt' => $salt
        );
        
        $this->db->insert('account', $data);
        
        return $salt . '<br/>' . $pass . '<br/>' . $hash;
    }
    
    
    // Generates secure password using CSPRING algorithm
    // @param length - length of the encrypted plain text
    public function generate_password($length = 24) {

        if(function_exists('openssl_random_pseudo_bytes')) {
            $password = base64_encode(openssl_random_pseudo_bytes($length, $strong));
            if($strong == TRUE)
                return substr($password, 0, $length); //base64 is about 33% longer, so we need to truncate the result
        }

        # fallback to mt_rand if php < 5.3 or no openssl available
        $characters = '0123456789';
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz/+'; 
        $charactersLength = strlen($characters)-1;
        $password = '';

        # select some random characters
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[mt_rand(0, $charactersLength)];
        }        
        return $password;
    }
}
