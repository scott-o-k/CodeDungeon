<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:user',
			'phone' => 'required|max:25|min:6',
			'class' => 'required|max:255',
			'password' => 'required|confirmed|min:2',
			'admin' => 'max:1'
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		if (isset($_POST['admin'])) {
			return User::create([
				'first_name' => $data['first_name'],
				'last_name' => $data['last_name'],
				'email' => $data['email'],
				'phone' => $data['phone'],
				'class' => $data['class'],
				'password' => bcrypt($data['password']),
				'admin' => $data['admin']
				]);
		} else {
			return User::create([
				'first_name' => $data['first_name'],
				'last_name' => $data['last_name'],
				'email' => $data['email'],
				'phone' => $data['phone'],
				'class' => $data['class'],
				'password' => bcrypt($data['password']),
				'admin' => '0'
				]);			
		}

	}

}
