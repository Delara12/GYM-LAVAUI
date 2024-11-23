<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class InstructorController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('InstructorModel');   
    }

    public function instructor_table()
    {
        $data['instructors'] = $this->InstructorModel->instructor_table();
        $this->call->view('instructor_table', $data);

        $this->call->view('instructor_table');
    }

    public function delete($id)
    {
        if ($this->InstructorModel->delete($id)) {
            redirect('instructor_table');
        } else {
            redirect('instructor_table');
        }
    }


    public function index() {
        $this->call->view('instructor');  // Assuming the view is now for instructors
    }

    public function save() {
        if($this->form_validation->submitted())
        {
            $instructorName = $this->io->post('instructorName');
            $instructorEmail = $this->io->post('instructorEmail');
            $instructorPhone = $this->io->post('instructorPhone');
            $instructorSpecialty = $this->io->post('instructorSpecialty');
        }
        
        if ($this->InstructorModel->saveInstructorInfo($instructorName, $instructorEmail, $instructorPhone, $instructorSpecialty)) {
            redirect('instructor');  // Redirecting to the instructor page
            set_flash_alert('success!', 'Instructor information saved successfully.');
        } else {
            echo "Failed to save instructor information.";
        }
    }
}
?>
