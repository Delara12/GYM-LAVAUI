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
        $InstructorModel = new InstructorModel();
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
            set_flash_alert('success!', 'Instructor deleted successfully.');
            redirect('instructor_table');
        } else {
            set_flash_alert('error!', 'Failed to delete instructor.');
            redirect('instructor_table');
        }
    }

    public function index()
    {
        $this->call->view('instructor');  // Assuming the view is for adding instructors
    }

    public function save()
    {
        if ($this->form_validation->submitted())
        {
            $instructorName = $this->io->post('instructorName');
            $instructorAge = $this->io->post('instructorAge');
            $instructorEmail = $this->io->post('instructorEmail');
            $instructorPhone = $this->io->post('instructorPhone');
            $instructorSpecialty = $this->io->post('instructorSpecialty');

            // Handle image upload
            $instructorImage = $this->handleImageUpload();

            if ($this->InstructorModel->saveInstructorInfo($instructorName, $instructorAge, $instructorEmail, $instructorPhone, $instructorSpecialty, $instructorImage)) {
                set_flash_alert('success!', 'Instructor information saved successfully.');
                redirect('instructor_table');
            } else {
                set_flash_alert('error!', 'Failed to save instructor information.');
                redirect('instructor');
            }
        }
    }

    public function update($id)
    {
        if ($this->form_validation->submitted())
        {
            $instructorName = $this->io->post('instructorName');
            $instructorAge = $this->io->post('instructorAge');
            $instructorEmail = $this->io->post('instructorEmail');
            $instructorPhone = $this->io->post('instructorPhone');
            $instructorSpecialty = $this->io->post('instructorSpecialty');

            // Handle image upload
            $instructorImage = $this->handleImageUpload($id);

            if ($this->InstructorModel->updateInstructorInfo($id, $instructorName, $instructorAge, $instructorEmail, $instructorPhone, $instructorSpecialty, $instructorImage)) {
                set_flash_alert('success!', 'Instructor information updated successfully.');
                redirect('instructor_table');
            } else {
                set_flash_alert('error!', 'Failed to update instructor information.');
                redirect('instructor_table');
            }
        }
        else
        {
            $data['instructor'] = $this->InstructorModel->getInstructorById($id);
            $this->call->view('instructor_update', $data);
        }
    }

    private function handleImageUpload($id = null)
    {
        // Default image
        $imageName = 'default-avatar.jpg';

        // Check if a file is uploaded
        if (isset($_FILES['instructorImage']) && $_FILES['instructorImage']['error'] == UPLOAD_ERR_OK)
        {
            $image = $_FILES['instructorImage'];
            $uploadDir = './uploads/instructors/';

            // Ensure the upload directory exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true); // Create the directory with appropriate permissions
            }

            // Validate the image file
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($image['type'], $allowedTypes)) {
                set_flash_alert('error!', 'Invalid image type. Allowed types are JPEG, PNG, and GIF.');
                return $imageName;
            }

            // Generate a unique file name
            $imageName = uniqid() . '-' . basename($image['name']);
            $uploadPath = $uploadDir . $imageName;

            // Move the uploaded file to the server
            if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
                // If updating, delete the old image
                if ($id) {
                    $currentInstructor = $this->InstructorModel->getInstructorById($id);
                    if ($currentInstructor && $currentInstructor['instructor_image'] != 'adefault-avatar.jpg') {
                        $oldImagePath = $uploadDir . $currentInstructor['instructor_image'];
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }
                }
            } else {
                set_flash_alert('error!', 'Failed to upload the image.');
                return 'default-avatar.jpg';
            }
        }

        return $imageName;
    }
}
?>
