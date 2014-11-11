<?php

class PreguntaController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $preguntas = Pregunta::all();
        $respuestas = Respuesta::all();
        return View::make('preguntas.Paginas.index')->with('preguntas', $preguntas)
                        ->with('respuestas', $respuestas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('preguntas.Paginas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $pregunta = new pregunta();
        
        $pregunta->TextoPregunta=Input::get('texto');
        $pregunta->Seccion=Input::get('seccion');
        
        $pregunta->save();
        
        //var_dump($pregunta);
        
        
        $correcto=Input::get('r1c');
        
        //var_dump(Input::get('texto3'));
        
        
        
        $respuesta=new respuesta();
        $respuesta->inciso=Input::get('inciso1');
        $respuesta->Textodelinciso=Input::get('texto1');
        $correcto=Input::get('r1c');
        if($correcto!="1"){
            $correcto="0";
        }
        $respuesta->correcto=$correcto;
        $respuesta->Preguntas_idPreguntas=$pregunta->idPreguntas;
        $respuesta->save();
        
        //////////////////////////////
        $respuesta=new respuesta();
        $respuesta->inciso=Input::get('inciso2');
        $respuesta->Textodelinciso=Input::get('texto2');
        $correcto=Input::get('r2c');
        if($correcto!="1"){
            $correcto="0";
        }
        $respuesta->correcto=$correcto;
        $respuesta->Preguntas_idPreguntas=$pregunta->idPreguntas;
        $respuesta->save();
        ///////////////////////////////
        $respuesta=new respuesta();
        $respuesta->inciso=Input::get('inciso3');
        $respuesta->Textodelinciso=Input::get('texto3');
        $correcto=Input::get('r3c');
        if($correcto!="1"){
            $correcto="0";
        }
        $respuesta->correcto=$correcto;
        $respuesta->Preguntas_idPreguntas=$pregunta->idPreguntas;
        $respuesta->save();
        ///////////////////////////////
        $respuesta=new respuesta();
        $respuesta->inciso=Input::get('inciso4');
        $respuesta->Textodelinciso=Input::get('texto4');
        $correcto=Input::get('r4c');
        if($correcto!="1"){
            $correcto="0";
        }
        $respuesta->correcto=$correcto;
        $respuesta->Preguntas_idPreguntas=$pregunta->idPreguntas;
        $respuesta->save();
                
        return Redirect::to('preguntas/create');
        
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
        //echo $id;
        $pregunta = Pregunta::find($id);

        // show the edit form and pass the nerd
        return View::make('preguntas/paginas/edit')
            ->with('pregunta', $pregunta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {

        
        $pregunta = Pregunta::find($id);
        
        $pregunta->TextoPregunta=Input::get('texto');
        $pregunta->Seccion=Input::get('seccion');
        
        $pregunta->save();
        
        $preguntas = Pregunta::all();
        $respuestas = Respuesta::all();
        return Redirect::to('preguntas')->with('preguntas', $preguntas)
                        ->with('respuestas', $respuestas);
                
                
                
        //return View::make('preguntas.Paginas.index')->with('preguntas', $preguntas)
                       // ->with('respuestas', $respuestas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //echo $id;
        $pregunta = Pregunta::find($id);
        $pregunta->delete();
        
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('preguntas');
    }

}
