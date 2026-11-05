<?php

namespace App\Http\Controllers;

class EntregaController extends Controller
{
    public function index()
    {
        $entrega = 'Entregas Concluidas com Sucesso em:';
        $locais = 'São Paulo, Rio de Janeiro e Belo Horizonte';
        $pessoas = 'Equipe de Entregadores: João, Maria e José';

        return view('entregas', [
            'entrega' => $entrega,
            'locais' => $locais,
            'pessoas' => $pessoas,
        ]);
    }
}
