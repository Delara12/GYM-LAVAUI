<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class mem extends Controller {

	public function index() {
        $this->call->view('memplan');
    }
}
?>