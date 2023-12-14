<?php

namespace Controllers;

use Classes\Email;
use MVC\Router;

#[\AllowDynamicProperties]

class PaginasController {
    public static function about(Router $router){

        $router->render('about', [
            'titulo' => 'Sobre Mí'
        ]);
    }
    public static function portfolio(Router $router){

        $router->render('portfolio', [
            'titulo' => 'Proyectos'
        ]);
    }
    public static function skills(Router $router){

        $router->render('skills', [
            'titulo' => 'Habilidades'
        ]);
    }
    public static function form(Router $router){
        $alertas = [];
        $llaves = ['nombre', 'apellido', 'email', 'mensaje'];
        $datos = [];
        $datos['nombre'] = '';
        $datos['apellido'] = '';
        $datos['email'] = '';
        $datos['mensaje'] = '';
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            //guardo en datos lo que viene de POST
            foreach($llaves as $llave) {
                $datos[$llave] = $_POST[$llave];
            }
            //validaciones
            if(!$_POST['nombre']) {
                $alertas['error'][] = 'El Nombre es Obligatorio';
            }
            if(!$_POST['apellido']) {
                $alertas['error'][] = 'El Apellido es Obligatorio';
            }
            if(!$_POST['email']) {
                $alertas['error'][] = 'El Email es Obligatorio';
            }
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $alertas['error'][] = 'Email no válido';
            }
            if(!$_POST['mensaje']) {
                $alertas['error'][] = 'Por favor indica la razón del contacto.';
            }
            if(empty($alertas)){
                $email = new Email($datos['email'], $datos['nombre'], $datos['apellido'], $datos['mensaje']);
                $confirmacion = $email->enviarConfirmacion();
                if($confirmacion){
                    header('Location: /thanks');
                } else {
                    $alertas['error'][] = 'Hubo un error, intentalo nuevamente';
                }
            }
        }

        $router->render('form', [
            'titulo' => 'Formulario de Contacto',
            'alertas' => $alertas,
            'datos' => $datos
        ]);
    }
    public static function thanks(Router $router){

        $router->render('thanks', [
            'titulo' => 'Gracias'
        ]);
    }
    public static function error(Router $router){

        $router->render('error', [
            'titulo' => 'Página no Encontrada'
        ]);
    }

    
}


?>