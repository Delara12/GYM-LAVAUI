<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MembersController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('MembersModel');
    }

    // Add this method
    public function index()
    {
        // You can load a view here or redirect to another method
        $this->call->view('members');  // Assuming you have a view to list all members
    }

    // Method to display the form for adding a new member
    public function add_member()
    {
        $this->call->view('members');  // Load the form view
    }

    // Method to save member data from the form
    public function save()
    {
        if ($this->form_validation->submitted())
        {
            // Collecting form data
            $First_name = $this->io->post('first_name');
            $Last_name = $this->io->post('last_name');
            $Age = $this->io->post('age');
            $Gender = $this->io->post('gender');
            $Email = $this->io->post('email');
            $Phone = $this->io->post('phone_number');
            $Address = $this->io->post('address');

            // Handle image upload (if any)
            // $memberImage = $this->handleImageUpload();

            // Save the member data to the database
            if ($this->MembersModel->saveMemberInfo($First_name, $Last_name, $Age, $Gender, $Email, $Phone, $Address)) {
                set_flash_alert('success', 'Member added successfully.');
                redirect('members');
            } else {
                set_flash_alert('error', 'Failed to add member.');
                redirect('members/add_member');
            }
        } else {
            // If form is not submitted, redirect to the add_member page
            redirect('members/add_member');
        }
    }
}