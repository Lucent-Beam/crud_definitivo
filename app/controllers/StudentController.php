<?php

class StudentController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('Admin/student');
	}

	public function saverecord(){

			$poststudent = Input::all();

			$data = array(
					'student_name'=> $poststudent['studentname'],
					'gender'			=> $poststudent['gender'],
					'phone'				=> $poststudent['phone']
			);

			$check = DB::table('student')->insert($data);

			if($check > 0){
					return 0;
			}

			else {
				return 1;
			}

	}

	public function display()
	{

		$students = DB::table('student')->get();
		return Response::json(array(
		'students' => 	$students
		));

	}


}
