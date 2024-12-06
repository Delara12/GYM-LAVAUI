<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Gym_model extends Model {
    
    public function get_all_instructors() {
        // Your database query to fetch instructors
        return $this->db->table('instructor')->get_all();
    }
    


public function get_total_members() {
    return $this->db->table('members')->count_all();
}

public function get_active_classes() {
    return $this->db->table('classes')->where('status', 'active')->count_all();
}

public function get_instructor_count() {
    return $this->db->table('instructor')->count_all();
}

public function get_monthly_revenue() {
    $this_month = date('Y-m');
    return $this->db->table('payments')
                    ->where('DATE_FORMAT(payment_date, "%Y-%m") =', $this_month)
                    ->sum('amount');
}

public function add_instructor($data) {
    return $this->db->table('instructors')->insert($data);
}
}