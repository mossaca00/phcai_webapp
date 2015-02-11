<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Load account model
        $this -> load -> model('account_model');

        // Disable browser caching
        $this -> output -> set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this -> output -> set_header("Pragma: no-cache");

        // Default view variables
        $this -> data = array('title' => 'Edit', 'heading' => 'Edit Password', 'sub' => 'edit password to protect against anything', 'user' => $this -> session -> userdata('role'), 'links' => array('Manage Lectures' => base_url('admin/lectures'), 'Manage Students' => base_url('admin/students'), 'Update Account' => base_url('admin/account')));
    }

    public function index() {
        $this -> home();
    }

    // Displays form for editing account
    public function home() {
        
        if ($this -> session -> userdata('is_logged_in') && $this -> session -> userdata('role') == 'Admin') {
            
            $this -> load -> view('system/account_view', $this -> data);
        } else {
            redirect('gate/');
        }
    }

    /**
     *  Updates account entered in the update account form
     */
    public function update() {
         $this -> form_validation -> set_rules('inputPassword', 'Old Password', 'xss_clean|callback_validate_password');
        $this -> form_validation -> set_rules('inputNewPassword', 'New Password', 'xss_clean');

        if ($this -> form_validation -> run()) {
            $this -> account_model -> updatePassword($this -> input -> post('inputNewPassword'));
            echo "Password Updated!";
        } else {
            $this -> load -> view('system/account_view', $this -> data);
        }
    }

    /**
     * Callback for checking password validity
     */
    public function validate_password() {

         $password = $this -> input -> post('inputPassword');

        if ($this -> account_model -> validate_password($password)) {
            return TRUE;
        } else {
            $this -> form_validation -> set_message('validate_password', 'Password does not match with the existing!');
            return FALSE;
        }
    }

}
