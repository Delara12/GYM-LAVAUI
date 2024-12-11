<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class GymController extends Controller {

    // Constructor to load the model
    public function __construct() {
        parent::__construct();
        // Load any models or libraries you need
        $this->call->model('gym_model');
    }

    // Dashboard method to fetch dashboard data
    public function dashboard() {
        // Fetch data for the dashboard
        $data['total_members'] = $this->gym_model->get_total_members();
        $data['active_classes'] = $this->gym_model->get_active_classes();
        $data['instructor_count'] = $this->gym_model->get_instructor_count();
        $data['monthly_revenue'] = $this->gym_model->get_monthly_revenue();
        $data['instructors'] = $this->gym_model->get_all_instructors();
        $data['members'] = $this->gym_model->get_all_members(); // Get all members for the table
        $data['user_count'] = $this->gym_model->get_user_count();
        
        // Debugging line to check values
        echo "Debug: Instructor Count = " . $data['instructor_count'];

        // Load the dashboard view and pass the data
        $this->call->view('gym_dashboard', $data);
    }

    // Additional methods can go here, e.g., for handling other views or actions
    public function tableinstructordash() {
        // Fetch instructors data
        $data['instructors'] = $this->gym_model->get_all_instructors();
        $data['members'] = $this->gym_model->get_all_members();
        
        // Load the view and pass the data
        $this->call->view('tableinstructordash', $data);

        
    // Fetch the user count (adjust the query as needed for your database structure)
   // $user_count = $this->UserModel->getUserCount(); // Assuming a UserModel with a method to get the user count

    // Pass $user_count to the view
    //$this->load->view('tableinstructordash', ['user_count' => $user_count]);


    }

    public function memberTable()
{
    // Fetch member data (adjust to your model and database structure)
    $members = $this->MemberModel->getAllMembers(); // Example method

    // Pass data to the view
    $this->load->view('tableinstructordash', ['members' => $members]);
}




   // public function index() {
      //  $data = ['user_count' => $this->gym_model->get_user_count(),];
      //  $this->render('gym_dashboard', $data);
    //}

    
}
?>
