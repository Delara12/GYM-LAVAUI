<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MemberModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->call->database();
    }

    public function saveMember($data) {
        return $this->db->table('members')->insert($data);
    }

    public function getAllMembers() {
        return $this->db->table('members')->get_all();  // Fetch all members from the 'members' table
    }


    

    // Delete method
    public function delete($id)
    {
        // Delete the member record from the database
        return $this->db->table('members')->where('id', $id)->delete();
    }


    public function updateMember($id, $fullname, $age, $gender, $email, $phone, $address)
    {
        $data = array(
            'fullname' => $fullname,
            'age' => $age,
            'gender' => $gender,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
        );

        return $this->db->table('members')->where('id', $id)->update($data);
    }

    // Get member by ID
    public function getMemberById($id)
    {
        return $this->db->table('members')->where('id', $id)->get();
    }




}


///defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

//class MemberModel extends Model {

  //  public function __construct() {
    //    parent::__construct();
      //  $this->call->database();
    //}

   // public function saveMember($data) {
     //   return $this->db->table('members')->insert($data);
    //}

    //public function countMembers() {
      //  return $this->db->table('members')->count_all_results();
    //}


    //public function getAllMembers() {
      //  return $this->db->table('members')->get_all();  // Fetch all members from the 'members' table
   // }
//}
//?>
