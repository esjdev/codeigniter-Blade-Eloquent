<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use App\Core\BladeController;

class Home extends BladeController {

	public function __construct() {        
		parent::__construct();
	}

	public function index()
	{
		$users = User::all();

		$this->view('home', compact('users'));
	}

}
