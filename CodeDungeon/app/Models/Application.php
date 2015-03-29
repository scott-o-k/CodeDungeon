<?php
namespace App\Models;

use DB;
use app\Library\Sql;
use App\Models\Model;

class Application extends Model {
    protected static $table = 'application';
    protected static $key = 'application_id';



// Creating New Application ID

	// public static function createNew($user_id) {
		// $sql = "INSERT INTO application (user_id, class_id)
		// 		VALUES (:user_id, :class_id)";

		// $create_app = DB::statement($sql, [':user_id'=>$user_id,
		// 									':class_id'=>$class_id]);

		// $application = new application();
		// $application->application_id = DB::getPdo()->lastInsertId();
		// $application->user_id

		// return $application;

	// }

}