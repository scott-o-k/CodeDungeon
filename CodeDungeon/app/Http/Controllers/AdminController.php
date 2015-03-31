<?php namespace App\Http\Controllers;

use DB;
use App\User;
use App\Models\Step;
use App\Models\Application;
use Request;

class AdminController extends Controller {

	public function getAllStudents() {
		$users = User::all(['admin' => '0']);
	}

	public function getAdmins() {
		$admins = User::all(['admin' => '1']);
	}
}