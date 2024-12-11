<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AppointmentModel extends Model {

    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }

    // Save a new appointment to the database
    public function saveAppointment($name, $email, $appointmentDate, $appointmentTime, $notes) {
        $data = [
            'name' => $name,
            'email' => $email,
            'appointment_date' => $appointmentDate,
            'appointment_time' => $appointmentTime,
            'notes' => $notes
        ];

        return $this->db->table('appointments')->insert($data);
    }

    // Fetch all appointments from the database
    public function getAllAppointments() {
        return $this->db->table('appointments')->get_all();
    }
}
