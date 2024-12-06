<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class InstructorModel extends Model {

    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }

    // Fetch instructors grouped by department
    public function getInstructorsByDepartment()
    {
        $sql = "SELECT instructor_name, COUNT(*) as count FROM instructor GROUP BY instructor_name";
        return $this->db->query($sql)->fetchAll();
    }

    // Retrieve all instructors, including the image
    public function instructor_table()
    {
        return $this->db->table('instructor')->get_all();
    }

    // Save instructor info, including image
    public function saveInstructorInfo($instructorAge, $instructorName, $instructorEmail, $instructorPhone, $instructorSpecialty, $instructorImage = 'default-avatar.jpg') 
    {
        $data = array(
            'instructor_age' => $instructorAge,
            'instructor_name' => $instructorName,
            'instructor_email' => $instructorEmail,
            'instructor_phone' => $instructorPhone,
            'instructor_specialty' => $instructorSpecialty,
            'instructor_image' => $instructorImage, // Save the image file name
        );

        return $this->db->table('instructor')->insert($data);
    }

    // Delete instructor by ID, including image deletion
    public function delete($id)
    {
        // Retrieve the image path before deleting the instructor record
        $instructor = $this->getInstructorById($id);
        if ($instructor && $instructor['instructor_image'] != 'default-avatar.jpg') {
            $imagePath = './uploads/instructors/' . $instructor['instructor_image'];
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image file
            }
        }

        return $this->db->table('instructor')->where('id', $id)->delete();
    }

    // Update instructor info, including updating image if necessary
    public function updateInstructorInfo($id, $instructorName, $instructorAge, $instructorEmail, $instructorPhone, $instructorSpecialty, $newImage = null)
    {
        $data = array(
            'instructor_name' => $instructorName,
            'instructor_age' =>$instructorAge,
            'instructor_email' => $instructorEmail,
            'instructor_phone' => $instructorPhone,
            'instructor_specialty' => $instructorSpecialty,
        );

        if ($newImage) {
            $data['instructor_image'] = $newImage; // Update with the new image filename
        }

        return $this->db->table('instructor')->where('id', $id)->update($data);
    }

    // Get instructor by ID
    public function getInstructorById($id)
    {
        return $this->db->table('instructor')->where('id', $id)->get();
    }
}
?>
