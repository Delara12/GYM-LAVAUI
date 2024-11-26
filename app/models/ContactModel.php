<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ContactModel extends Model {

    public function __construct()
    {
        parent:: __construct();
        $this->call->database();
    }

    public function saveContactInfo($gymAddress, $phoneNumber, $emailAddress, $facebookLink, $instagramLink) {
        $data = array (
            'gym_address' => $gymAddress,
            'phone_number' => $phoneNumber,
            'email_address' => $emailAddress,
            'facebook_link' => $facebookLink,
            'instagram_link' => $instagramLink
        );

        return $this->db->table('gym_contact_info')->insert($data);
    }
}
?>
z