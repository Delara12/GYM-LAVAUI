<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class InstructorModel extends Model {

    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }

    public function getInstructorsByDepartment()
    {
        $sql = "SELECT instructor_name, COUNT(*) as count FROM instructor GROUP BY instructor_name";
        return $this->db->query($sql)->fetchAll();
    }

    public function instructor_table()
    {
        return $this->db->table('instructor')->get_all();
    }

    public function saveInstructorInfo($instructorName, $instructorEmail, $instructorPhone, $instructorSpecialty) 
    {
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

    public function updateInstructorInfo($id, $instructorName, $instructorEmail, $instructorPhone, $instructorSpecialty)
    {
        $data = array(
            'instructor_name' => $instructorName,
            'instructor_email' => $instructorEmail,
            'instructor_phone' => $instructorPhone,
            'instructor_specialty' => $instructorSpecialty,
        );

        return $this->db->table('instructor')->where('id', $id)->update($data);
    }

    public function getInstructorById($id)
    {
        return $this->db->table('instructor')->where('id', $id)->get();
    }
}
?>
