<?php

class RegistroController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //mostrará a todos los aspirantes registrados
        if (Auth::check()) {
            return View::make('registro.Paginas.index');
        } else {
            return View::make('login.Paginas.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //mostrara una vista desde la que se podrá agregar un aspirante
        if (Auth::check()) {
            return View::make('Registro.Paginas.create');
        } else {
            return View::make('login.Paginas.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation



        /* $rules = array(
          'nombre' => 'required|alpha',
          /*'apellido paterno' => 'required|alpha',
          'apellido materno' => 'alpha',
          'email' => 'required|email',
          'curp' => 'required',
          'fecha de nacimiento' => 'required',
          'calle' => 'required|numeric',
          'número de casa' => 'required|numeric', */
        // );
        //$validator = Validator::make(Input::all(), $rules);*/
        // process the login
        /* if ($validator->fails()) {
          return Redirect::to('registro/create')
          ->withErrors($validator)
          ->withInput(Input::except('password'));
          } else {// */
        // store
        $aspirante = new Aspirante();
        $aspirante->nombre = Input::get('nombre');
        $aspirante->paterno = Input::get('apellido_paterno');
        $aspirante->materno = Input::get('apellido_materno');
        $aspirante->curp = Input::get('curp');
        $aspirante->nacimiento = Input::get('fecha_de_nacimiento');
        $aspirante->email = Input::get('email');
        $aspirante->calle = Input::get('calle');
        $aspirante->colonia = Input::get('colonia');
        $aspirante->ciudad = Input::get('ciudad');
        $aspirante->estado = Input::get('estado');
        // */
        //$user=new User;
        //$user->login='123';
        //$user->save();

        echo "user";
        try {
            $aspirante->save();
            return Redirect::to('registro/create'); //*/
            echo $aspirante;
        } catch (\Exception $e) {
            echo $e;
        }
        // redirect
        /* Session::flash('message', 'Successfully created nerd!');
          return Redirect::to('registro/create');// */
        //}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    public function upload() {
        return View::make('registro.Paginas.photo');
    }

    public function savePicture() {
        //$file = Input::file("photo")->getClientOriginalName();//
        $file=(Input::file('file'));

        /*$dataUpload = array(
            "picture" => $file//campo foto para validar
        );*/
        
        
        
        //$user = User::find(Auth::User()->id);
        //$user->picture = $file->getFilename();
        
        Auth::User()->picture=$file->getClientOriginalName();
        var_dump($file->getClientMimeType());
       // echo $file;
        if (Auth::User()->save()) {
            echo "true";
        } else {
            echo "false";
        }//*/

        /* $rules = array(
          'username' => 'required|min:2|max:100',
          'email' => 'required|email|min:6|max:100|unique:users',
          'password' => 'required|confirmed|min:6|max:100',
          'photo' => 'required'
          ); */

        /* $messages = array(
          'required' => 'El campo :attribute es obligatorio.',
          'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
          'email' => 'El campo :attribute debe ser un email válido.',
          'max' => 'El campo :attribute no puede tener más de :min carácteres.',
          'unique' => 'El email ingresado ya está registrado en el blog',
          'confirmed' => 'Los passwords no coinciden'
          );

          $validation = Validator::make(Input::all(), $rules, $messages);
          //si la validación falla redirigimos al formulario de registro con los errores
          //y con los campos que nos habia llenado el usuario
          if ($validation->fails()) {
          return Redirect::to('upload')->withErrors($validation)->withInput();
          } else {
          $user = new User(array(
          "username" => Input::get("username"),
          "email" => Input::get("email"),
          "password" => Hash::make(Input::get("password")),
          "photo" => Input::file("photo")->getClientOriginalName()//nombre original de la foto
          ));
          if ($user->save()) {
          //guardamos la imagen en public/imgs con el nombre original
          $file->move("imgs", $file->getClientOriginalName());
          //redirigimos con un mensaje flash
          return Redirect::to('upload')->with(array('confirm' => 'Te has registrado correctamente.'));
          } */
    }

    //}
}
