<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Productos extends Controller
{
    //
    public function index(){
        return view('inventario.productos');
    }


    public function prodperros(){
        $alimento = [
            'Codigo: 111',
            'Precio: 16900',
        ];
        $comedero = [
            'Codigo: 222',
            'Precio: 35900',
        ];

        $snack = [
            'Codigo: 333',
            'Precio: 8700',
        ];
        $correa = [
            'Codigo: 444',
            'Precio: 21900',
        ];
        $alimhumedo = [
            'Codigo: 555',
            'Precio: 17000',
        ];
        $juguete = [
            'Codigo: 666',
            'Precio: 22600',
        ];

        return view('inventario.prodperros')
        ->with('alim', $alimento )
        ->with('come',$comedero)
        ->with('snack', $snack)
        ->with('correa', $correa)
        ->with('alhum', $alimhumedo)
        ->with('jug', $juguete);

    }

    public function prodgatos(){
        $alimento = [
            'Codigo: 111',
            'Precio: 16900',
        ];
        $comedero = [
            'Codigo: 222',
            'Precio: 35900',
        ];

        $snack = [
            'Codigo: 333',
            'Precio: 8700',
        ];
        $correa = [
            'Codigo: 444',
            'Precio: 21900',
        ];
        $alimhumedo = [
            'Codigo: 555',
            'Precio: 17000',
        ];
        $juguete = [
            'Codigo: 666',
            'Precio: 22600',
        ];

        return view('inventario.prodgatos')
        ->with('alim', $alimento )
        ->with('come',$comedero)
        ->with('snack', $snack)
        ->with('correa', $correa)
        ->with('alhum', $alimhumedo)
        ->with('jug', $juguete);

    }

    public function descripcion($id, $descripcion = null){
        return view('inventario.descripcion')
        ->with('id', $id)
        ->with('descripcion', $descripcion);
    }



}
