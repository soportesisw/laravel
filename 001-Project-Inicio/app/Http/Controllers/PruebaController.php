<?php

namespace AppWGC\Http\Controllers;

use Illuminate\Http\Request;
use AppWGC\Prueba;
use Illuminate\Support\Facades\Redirect;
use AppWGC\Http\Requests\PruebaFormRequest;
use DB;

class PruebaController extends Controller
{
    //
    public function __construct(){

    }

    public function index(Request $request){
        if ($request) {
            $query=trim($request->get('searchText'));
            $pruebas=BD::table('prueba')->where('nombre','like','%'.$query.'%')
            ->where('apellidos','=','S')
            ->orderBy('idprueba','desc')
            ->paginate(7);

            return view('WGCPrueba.prueba.index',['pruebasHTML'=>$pruebas,'searchTxtHTML'=>$query]);
        }
    }

    public function crreate(){
        return view('WGCPrueba.prueba.create');
    }

    public function store(){
        
    }

    public function show(){
        
    }

    public function edit(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
