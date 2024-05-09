<?php

require_once("Home.php"); // loading home controller

class Contacts extends Home
{ 
    
    public function __construct()
    {
        parent::__construct();
        check_module_access($module_id=65);

        if ($this->session->userdata("facebook_rx_fb_user_info") == 0 && $this->config->item("backup_mode") == 1 
        &&  $this->uri->segment(2)!="app_delete_action" ) {
            redirect('social_apps/index','refresh');
        }
        $this->important_feature();
        $this->member_validity();
        $this->load->library("fb_rx_login");
    }

    public function index()  
    {
        $contact_file_path = APPPATH . 'views/contact/contact.php';        
        if (file_exists($contact_file_path)) {
            $this->load->view('contact/contact');        
        } else {
            echo "File does not exist: " . $contact_file_path;
        }
    }

    public function create()  
    {
        $contact_file_path = APPPATH . 'views/contact/create.php';        
        if (file_exists($contact_file_path)) {
            $this->load->view('contact/create');        
        } else {
            echo "File does not exist: " . $contact_file_path;
        }
    }

    public function edit($id = null) : void 
    {
        $contact_file_path = APPPATH . 'views/contact/edit.php';        
        if (file_exists($contact_file_path)) {
            $this->load->view('contact/edit', ['id' => $id]);        
        } else {
            echo "File does not exist: " . $contact_file_path;
        }
    }

    public function delete($id = null) : void 
    {
        echo "delete function";
        exit;
    }

}