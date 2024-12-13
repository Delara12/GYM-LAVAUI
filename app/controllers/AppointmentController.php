<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AppointmentController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('AppointmentModel');
    }

    public function index() {
        // Fetch all appointments from the database
        $data['appointments'] = $this->AppointmentModel->getAllAppointments();
        $this->call->view('appointment', $data);
    }

    public function save() {
        // Handle form submission and save the appointment
        $name = $this->io->post('name');
        $email = $this->io->post('email');
        $appointmentDate = $this->io->post('appointmentDate');
        $appointmentTime = $this->io->post('appointmentTime');
        $notes = $this->io->post('notes');

        if ($this->AppointmentModel->saveAppointment($name, $email, $appointmentDate, $appointmentTime, $notes)) {
            set_flash_alert('success', 'Appointment booked successfully!');
            redirect('/appointment');
        } else {
            set_flash_alert('error', 'Failed to book the appointment.');
            redirect('/appointment');
        }
    }
}
