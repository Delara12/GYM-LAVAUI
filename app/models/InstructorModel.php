<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class InstructorModel extends Model {

    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }

    public function instructor_table()
    {
        return $this->db->table('instructor')->get_all();
    }

    public function saveInstructorInfo($instructorName, $instructorEmail, $instructorPhone, $instructorSpecialty) {
        $data = array(
            'instructor_name' => $instructorName,
            'instructor_email' => $instructorEmail,
            'instructor_phone' => $instructorPhone,
            'instructor_specialty' => $instructorSpecialty,
            
        );

        return $this->db->table('instructor')->insert($data);
    }

    public function delete($id)
    {
        return $this->db->table('instructor')->where('id', $id)->delete();
    }
}
?>
