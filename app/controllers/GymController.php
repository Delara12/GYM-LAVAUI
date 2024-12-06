<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class GymController extends Controller {
    public function dashboard() {
        // Fetch data for the dashboard
        $data['total_members'] = $this->gym_model->get_total_members();
        $data['active_classes'] = $this->gym_model->get_active_classes();
        $data['instructor_count'] = $this->gym_model->get_instructor_count();
    echo "Debug: Instructor Count = " . $data['instructor_count'];
        $data['monthly_revenue'] = $this->gym_model->get_monthly_revenue();
        $data['instructors'] = $this->gym_model->get_all_instructors();
        // Load the dashboard view and pass the data
        $this->call->view('gym_dashboard', $data);
    }

    
    public function __construct() {
        parent::__construct();
        // Load any models or libraries you need
        $this->call->model('gym_model');
    }

    public function tableinstructordash() {
        // Fetch instructors data
        $data['instructors'] = $this->gym_model->get_all_instructors();
        
        // Load the view and pass the data
        $this->call->view('tableinstructordash', $data);
    }
    
}

