<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConvocatoriaController
 *
 * @author CRISTHIAN
 */
class ConvocatoriaController extends BaseController {

    //put your code here
    public function showIndex() {
            return View::make('Convocatoria.Paginas.index');
    }
    public function showPaso1() {
            return View::make('Convocatoria.Paginas.paso1');
    }
    public function showPaso2() {
            return View::make('Convocatoria.Paginas.paso2');
    }
    public function showPaso3() {
            return View::make('Convocatoria.Paginas.paso3');
    }
    public function showPaso4() {
            return View::make('Convocatoria.Paginas.paso4');
    }
    public function showPaso5() {
            return View::make('Convocatoria.Paginas.paso5');
    }
    public function showConsideraciones() {
            return View::make('Convocatoria.Paginas.consideraciones');
    }
    
    


}
