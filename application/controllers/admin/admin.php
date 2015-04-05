<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Disable browser caching
        $this -> output -> set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this -> output -> set_header("Pragma: no-cache");

        // Default view variables
        $this -> data = array('title' => 'Admin Panel', 'heading' => 'Welcome, Admin', 'sub' => 'This is the admin panel, you manage lectures, students, and edit your password here. ', 'user' => $this -> session -> userdata('role'), 'links' => array('Manage Lectures' => base_url('admin/lectures'), 'Manage Students' => base_url('admin/students'), 'Update Account' => base_url('admin/account')));
    }

    public function index() {
        $this -> home();
    }

    /**
     * Home page for the admin panel
     * Side menu:
     *  - Edit Account
     *  - Manage Lectures (Upload and Delete lectures)
     *  - Manage Students (View, Add, Edit, Delete)
     */
    public function home() {
        if ($this -> session -> userdata('is_logged_in') && $this -> session -> userdata('role') == 'Admin') {
            $this -> load -> view('system/admin_view', $this -> data);
        } else {
            redirect('gate/');
        }
    }

    // Shows edit account controller
    public function editAccount() {
         if ($this -> session -> userdata('is_logged_in') && $this -> session -> userdata('role') == 'Admin') {
            redirect('admin/account');
        }
    }

    // Shows lectures controller
    public function lectures() {
         if ($this -> session -> userdata('is_logged_in') && $this -> session -> userdata('role') == 'Admin') {
            redirect('admin/lectures');
        }
    }

    // Shows students controller
    public function students() {
        if ($this -> session -> userdata('is_logged_in') && $this -> session -> userdata('role') == 'Admin') {
            redirect('admin/students');
        }
    }

}
