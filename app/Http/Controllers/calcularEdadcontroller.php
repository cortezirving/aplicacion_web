<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcularEdadcontroller extends Controller
{
    public  function calcularEdad() {
        $router->get('/calcular/{edad}', function ($edad) {
            if ($edad > 0 && $edad < 18) {
                return 'Eres menor de edad';
            } elseif ($edad >= 18 && $edad <= 100) {
                return ' Eres mayor de edad';
            } else {
                return ' Edad erronea';
            }
    }
}
