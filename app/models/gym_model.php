<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Gym_model extends Model {
    
    public function get_all_instructors() {
        // Your database query to fetch instructors
        return $this->db->table('instructor')->get_all();
    }

    // Fetch all members
    //public function get_all_members() {
       // return $this->db->table('members')->get_all();  // Assuming 'members' is the correct table name
   // }



    //public function get_user_count() {
     //   return $this->db->table('members')->select('COUNT(*) as count')->get()['count'];
   // }
   public function get_all_members() {
    return $this->db->table('members')->get_all();
}


   



    

//public function add_instructor($data) {
  //  return $this->db->table('instructors')->insert($data);
//}
}