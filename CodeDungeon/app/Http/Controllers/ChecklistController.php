<?php namespace App\Http\Controllers;

use DB;
use App\User;
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


	public function getApp() {

		$user = Request::user();
		$application = $user->getApplication();

		if ($application) {
			return view ('main_checklist', ['application'=>$application,
											'application_id'=>$application->getId()]);
		} else {
			$application = new Application();
			$application->user_id = $user->user_id;
			$application->class_id = $user->class;
			$application_id = $application->save();

			return redirect()->route('applyNow');
			// dd($application);
		}
	}

	// ----------Adding outside accounts for Step 0 ---------- //

	public function updateEmailAction($application_id) {
		$user = Request::user();
		$application = $user->getApplication();
		if (!empty(Request::input('google_username'))){
			$application->google_username = Request::input('google_username');	
		} 
			
		if (!empty(Request::input('github_username'))){
			$application->github_username = Request::input('github_username');	
		}

		if (!empty(Request::input('twitter_username'))){
			$application->twitter_username = Request::input('twitter_username');	
		}

		$application->save();
		return $application;
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

	// ----------Marking 'Complete' For Each Step ---------- //

	public function completeStep0() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->complete_step_0 = Request::input('complete_step_0');
		$application->save();
		return Request::input('complete_step_0');
	}

	public function completeStep1() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->complete_step_1 = Request::input('complete_step_1');
		$application->save();
		return Request::input('complete_step_1');
	}

	public function completeStep2() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->complete_step_2 = Request::input('complete_step_2');
		$application->save();
		return Request::input('complete_step_2');
	}

	public function completeStep3() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->complete_step_3 = Request::input('complete_step_3');
		$application->save();
		return Request::input('complete_step_3');
	}

	public function completeStep4() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->complete_step_4 = Request::input('complete_step_4');
		$application->save();
		return Request::input('complete_step_4');
	}

	public function completeStep5() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->complete_step_5 = Request::input('complete_step_5');
		$application->save();
		return Request::input('complete_step_5');
	}

	public function completeStep6() {
		$user = Request::user();
		$application = $user->getApplication();
		$application->complete_step_6 = Request::input('complete_step_6');
		$application->save();
		return Request::input('complete_step_6');
	}


}
