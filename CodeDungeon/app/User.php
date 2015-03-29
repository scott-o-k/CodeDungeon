<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;
use App\Models\Application;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';
	protected $primaryKey = 'user_id';

	/**
	 * The attributes that are mass assignable.
	 *	
	 * @var array
	 */
	protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'class', 'password', 'admin'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	//---gets Application for User, used in ChecklistController---//

	public function getApplication() {
		$sql = 'SELECT * FROM application WHERE user_id = :user_id';
		$results = DB::select($sql, [':user_id'=>$this->user_id,]);

		if (count($results) > 0) {
			$row = $results[0];
			$id = $row->application_id;
			$application = new Application($id);
			return $application;
		} else {
			return NULL;
		}
	}


}
