<?php

class RespuestaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$respuesta = Respuesta::find($id);
                //var_dump($respuesta);

        // show the edit form and pass the nerd
        return View::make('preguntas/paginas/Redit')
            ->with('respuesta', $respuesta);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//echo "update resp";
            
            $respuesta= respuesta::find($id);
        $respuesta->inciso=Input::get('inciso');
        $respuesta->Textodelinciso=Input::get('texto');
        $correcto=Input::get('r1c');
        if($correcto!="1"){
            $correcto="0";
        }
        
        $respuesta->correcto=$correcto;

        $respuesta->save();
        
        
        return Redirect::to('preguntas/');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		echo "aun no funciona, regresa otro dia";
	}


}
