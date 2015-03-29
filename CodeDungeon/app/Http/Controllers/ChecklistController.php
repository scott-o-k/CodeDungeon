<?php namespace App\Http\Controllers;

use DB;
use App\Models\Step;
use App\Models\Application;
use Request;

class ChecklistController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	
|	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	// public function listSteps() {
	// 	$steps = Step::all();
	// 	return view('main_checklist')
	// }

	public function getApp() {

		$user = Request::user();
		$application = $user->getApplication();

		if ($application) {
			return view ('main_checklist', ['application'=>$application]);
		} else {
			$application = new Application();
			$application->user_id = $user->user_id;
			$application->class_id = $user->class;
			$application_id = $application->save();

			return view('main_checklist', ['application'=>$application]);
			// dd($application);
		}
	}

	// ----------Adding outside accounts for Step 0 ---------- //

	public function updateEmailAction() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->google_username = Request::input('google_username');
		$application->save();
		return Request::input('google_username');
	}

	public function updateGitHubAction() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->github_username = Request::input('github_username');
		$application->save();
		return Request::input('github_username');
	}

	public function updateTwitterAction() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->twitter_username = Request::input('twitter_username');
		$application->save();
		return Request::input('twitter_username');
	}

}
