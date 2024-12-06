<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MembersModel extends Model {

public function saveMemberInfo($first_name, $last_name, $age, $gender, $email, $phone, $address)
{
    // Prepare data array to be inserted
    $data = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'age' => $age,
        'gender' => $gender,
        'email' => $email,
        'phone_number' => $phone,
        'address' => $address,
        
    ];

    // Insert data into the database and return the result
    return $this->db->insert('members', $data);
}
}
?>
