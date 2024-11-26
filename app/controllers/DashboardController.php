<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class DashboardController extends Controller {

	public function index() {
        $this->call->view('dashboard');
    }
}
?>