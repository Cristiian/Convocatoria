<?php

class RegistroController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //mostrará a todos los aspirantes registrados
        return View::make('Registro.Paginas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //mostrara una vista desde la que se podrá agregar un aspirante
        return View::make('Registro.Paginas.create');
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
            return Redirect::to('registro/create');//*/
            echo $aspirante;
        } catch (\Exception $e) {
            echo $e;
        }
        // redirect
        /*Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('registro/create');//*/
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

}
