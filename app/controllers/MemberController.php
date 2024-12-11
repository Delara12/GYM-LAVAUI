<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MemberController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->model('MemberModel');
    }

    public function index() {
        $this->call->view('member_form');
    }
//for table
    public function member_table() {
        // Retrieve members data
        $data['members'] = $this->MemberModel->getAllMembers();  // Assuming this method exists in the model
        // Pass the data to the view
        $this->call->view('member_table', $data);
    }

    public function delete($id)
    {
        // Attempt to delete the member
        if ($this->MemberModel->delete($id)) {
            // Set success flash alert if the deletion was successful
            set_flash_alert('success!', 'Member deleted successfully.');
            redirect('member_table');  // Redirect to the member page or list
        } else {
            // Set error flash alert if the deletion failed
            set_flash_alert('error!', 'Failed to delete member.');
            redirect('member_table');  // Redirect back to the member page or list
        }
    }

    public function update($id)
    {
        if ($this->form_validation->submitted()) {
            $fullname = $this->io->post('fullname');
            $age = $this->io->post('age');
            $gender = $this->io->post('gender');
            $email = $this->io->post('email');
            $phone = $this->io->post('phone');
            $address = $this->io->post('address');

            if ($this->MemberModel->updateMember($id, $fullname, $age, $gender, $email, $phone, $address)) {
                set_flash_alert('success', 'Member updated successfully.');
                redirect('member_table');
            } else {
                set_flash_alert('error', 'Failed to update member.');
                redirect('member_table');
            }
        } else {
            $data['member'] = $this->MemberModel->getMemberById($id);
            $this->call->view('member_update', $data);
        }
    }



    public function save() {
        if ($this->form_validation->submitted()) {
            $data = [
                'fullname' => $this->io->post('fullname'),
                'age'      => $this->io->post('age'),
                'gender'   => $this->io->post('gender'),
                'email'    => $this->io->post('email'),
                'phone'    => $this->io->post('phone'),
                'address'  => $this->io->post('address')
            ];

            if ($this->MemberModel->saveMember($data)) {
                set_flash_alert('success', 'Member registered successfully.');
                redirect('/member');
            } else {
                set_flash_alert('error', 'Failed to register the member.');
                redirect('/member');
            }
        }
    }
}


//defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

//class MemberController extends Controller {

  //  public function __construct() {
        //parent::__construct();  // Call the parent constructor

        // Load the MemberModel correctly
      //  $this->call->model('MemberModel');  // This will load the model correctly
    //}

    //public function index() {
        // Get the members data
        //$total_members = $this->MemberModel->countMembers();
        //$members = $this->MemberModel->getAllMembers();

        // Pass the data to the view
       // $data = [
            //'total_members' => $total_members,
          //  'members' => $members
       // ];

      //  $this->call->view('member_table', $data);  // Assuming the view name is 'members_dashboard'
    //}



    //public function member_table() {
        // Retrieve members data
    //    $data['members'] = $this->MemberModel->getAllMembers();  // Assuming this method exists in the model
        // Pass the data to the view
      //  $this->call->view('member_table', $data);
    //}


    
?>
