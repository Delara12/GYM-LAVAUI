<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ContactController extends Controller {

    public function __construct()
    {
     parent:: __construct();
     $this->call->model('ContactModel');   
    }

    public function index() {
        $this->call->view('contact');
    }

    public function save() {
        if($this->form_validation->submitted())
        {
            $gymAddress = $this->io->post('gymAddress');
            $phoneNumber = $this->io->post('phoneNumber');
            $emailAddress = $this->io->post('emailAddress');
            $facebookLink = $this->io->post('facebookLink');
            $instagramLink = $this->io->post('instagramLink');
        }
       

        if ($this->ContactModel->saveContactInfo($gymAddress, $phoneNumber, $emailAddress, $facebookLink, $instagramLink)) {
            redirect('contact');
            set_flash_alert('sucess!', 'contact save succefully');
        } else {
            echo "Failed to save contact information.";
        }


    }
}
?>
