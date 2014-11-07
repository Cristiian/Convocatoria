<?php

class LoginController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        if (Auth::check()) {
            return View::make('registro.Paginas.index');
        }  else {
            return View::make('login.Paginas.index');
        }
        




        /* // Verificamos que el usuario no esté autenticado
          if (Auth::check()) {
          // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
          return Redirect::to('/');
          }
          // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
          return View::make('login'); */
    }

    /**
     * Procesa los datos y verifica que este correctos para continuar con el proceso
     *
     * @return Response
     */
    public function autenticate() {
        $userdata = array(
            'login' => Input::get('login'),
            'password' => Input::get('password')
        );
        $remembering=Input::get('remember-me');
        
        /*if ($remembering==="true") {
           $remembering=1;
        }else{
            $remembering=0;
        }//*/
        //echo $remembering;

        if(Auth::attempt($userdata,$remembering))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/registro');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
        
        /*
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if (Auth::attempt($userdata, true)) {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('login')
                        ->with('mensaje_error', 'Tus datos son incorrectos')
                        ->withInput();//*/
    }
    
    public function logout() {
        Auth::logout();
        return Redirect::to('login');
    }

}
