<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function welcome()
    {
        $entrega = 'LogisExpress';
        $mensagem = 'Organizando entregas com eficiência.';

        return view('welcome', [
            'entrega' => $entrega,
            'mensagem' => $mensagem
        ]);
    }
}