<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gate extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Disable browser caching
        $this -> output -> set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this -> output -> set_header("Pragma: no-cache");
        $this -> load -> model('gate_model');
    }

    // Default:
    // M: admin@gmail.com
    // P: adminpass2112
    public function index() {
        $this -> login();
    }

    /*
     * Displays login form
     * Redirects user if current user session is logged in
     */
    public function login() {
        if ($this -> session -> userdata('is_logged_in')) {
            redirect('gate/members');
        } else {
            $this -> load -> view('system/signin');
        }
    }

    /**
     * Logs out current user
     * Destroys all sessions w/in the application
     * If current session is logged in, it will redirect user
     * to login form
     */
    public function logout() {
        if ($this -> session -> userdata('is_logged_in')) {
            $this -> session -> sess_destroy();
            echo 'You are now logged out! Click <a href="' . base_url('gate') . '"> here </a> to exit.';
        } else {
            redirect('gate');
        }
    }

    /**
     * Redirects user to members page if session is valid
     * else, redirects back to login page
     */
    public function members() {
        if (!$this -> session -> userdata('is_logged_in')) {
            redirect('gate');
        } else {
            redirect('admin/admin');
        }
    }
    
    /**
     * Validates login credentials
     * Redirects to members page on success
     * Redirects back to login page on failure
     */
    public function login_validation() {
        $this -> form_validation -> set_rules('inputEmail', 'Email', 'required|xss_clean|callback_validate_login');
        $this -> form_validation -> set_rules('inputPassword', 'Password', 'required');

        //if validation is successful
        if ($this -> form_validation -> run()) {
            $email = $this -> input -> post('inputEmail');
            $pass  = $this -> input -> post('inputPassword');

            $data = array(
                'email' => $email,
                'role'  => $this->gate_model->getRole($email),
                'is_logged_in' => TRUE
            );

            $this -> session -> set_userdata($data);
            
            redirect('gate/members');
        } else {
            $this -> load -> view('system/signin');
        }
    }

    public function validate_login() {
        $email = $this -> input -> post('inputEmail');
        $pass = $this -> input -> post('inputPassword');

        if ($this -> gate_model -> can_log_in($email, $pass)) {
            return true;
        } else {
            $this -> form_validation -> set_message('validate_login', 'Incorrect Email/Password');
            return false;
        }
    }

}
