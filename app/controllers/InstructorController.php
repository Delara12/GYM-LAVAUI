<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class InstructorController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('InstructorModel');   
    }

    public function getInstructorData()
    {
        $InstructorModel = new instructor();
        $data = $InstructorModel->getInstructorsByDepartment();

        // Return JSON response
        echo json_encode($data);
    }

    public function instructor_table()
    {
        $data['instructors'] = $this->InstructorModel->instructor_table();
        $this->call->view('instructor_table', $data);
    }

    public function delete($id)
    {
        if ($this->InstructorModel->delete($id)) {
            redirect('instructor_table');
        } else {
            redirect('instructor_table');
        }
    }

    public function index()
    {
        $this->call->view('instructor');  // Assuming the view is for instructors
    }

    public function save()
    {
        if($this->form_validation->submitted())
        {
            $instructorName = $this->io->post('instructorName');
            $instructorEmail = $this->io->post('instructorEmail');
            $instructorPhone = $this->io->post('instructorPhone');
            $instructorSpecialty = $this->io->post('instructorSpecialty');

            if ($this->InstructorModel->saveInstructorInfo($instructorName, $instructorEmail, $instructorPhone, $instructorSpecialty)) {
                set_flash_alert('success!', 'Instructor information saved successfully.');
                redirect('instructor');
            } else {
                echo "Failed to save instructor information.";
            }
        }
    }

    public function update($id)
    {
        if($this->form_validation->submitted())
        {
            $instructorName = $this->io->post('instructorName');
            $instructorEmail = $this->io->post('instructorEmail');
            $instructorPhone = $this->io->post('instructorPhone');
            $instructorSpecialty = $this->io->post('instructorSpecialty');

            if ($this->InstructorModel->updateInstructorInfo($id, $instructorName, $instructorEmail, $instructorPhone, $instructorSpecialty)) {
                set_flash_alert('success!', 'Instructor information updated successfully.');
                redirect('instructor_table');
            } else {
                set_flash_alert('error!', 'Failed to update instructor information.');
                redirect('instructor_table');
            }
        } else {
            $data['instructor'] = $this->InstructorModel->getInstructorById($id);
            $this->call->view('instructor_update', $data);
        }
    }
}
?>
