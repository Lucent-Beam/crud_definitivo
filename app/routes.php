<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function(){
	return View::make('Admin/student');
});

//ruta para procesar peticiones post llegadas del formulario
Route::post('/', function(){
	//comprobamos si es una petición ajax
	if(Request::ajax()){
		//validamos el formulario
	    $registerData = array(
	        'username'    =>    Input::get('username'),
	        'email'       =>    Input::get('email'),
	        'password'    =>    Hash::make(Input::get('password'))
	    );
	    $rules = array(
	        'username'     	=> 'required|min:2|max:100',
	        'email'     	=> 'required|email|min:6|max:100|unique:users',
	        'password'     	=> 'required|confirmed|min:6|max:100'
	    );
	    $messages = array(
	        'required'    	=> 'El campo :attribute es obligatorio.',
	        'min'         	=> 'El campo :attribute no puede tener menos de :min carácteres.',
	        'email'     	=> 'El campo :attribute debe ser un email válido.',
	        'max'         	=> 'El campo :attribute no puede tener más de :min carácteres.',
	        'unique'     	=> 'El email ingresado ya está registrado en la base de datos.',
	        'confirmed' 	=> 'Los passwords no coinciden.'
	    );
	    $validation = Validator::make(Input::all(), $rules, $messages);
	    //si la validación falla redirigimos al formulario de registro con los errores
	    if ($validation->fails())
	    {
	    	//como ha fallado el formulario, devolvemos los datos en formato json
	    	//esta es la forma de hacerlo en laravel, o una de ellas
			return Response::json(array(
			    'success' => false,
			    'errors' => $validation->getMessageBag()->toArray()
			));
	        //en otro caso ingresamos al usuario en la tabla usuarios
	    }else{
	        //creamos un nuevo usuario con los datos del formulario
	        $user = new User($registerData);
	        $user->save();
	        //si se realiza correctamente la inserción envíamos un mensaje
	        //conforme se ha registrado correctamente
	        if($user)
	        {
	            return Response::json(array(
				    'success' 		=> 	true,
				    'message' 		=> 	'Te has registrado correctamente'
				));
			}
	    }
	}
});
