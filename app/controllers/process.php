<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class process extends Controller {

	public function index() {
        $this->call->view('process_signup');
    }
}
?>