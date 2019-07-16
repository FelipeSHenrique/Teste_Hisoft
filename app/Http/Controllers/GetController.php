<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\redirect;

class GetController extends Controller
{

    //Função responsavel pelas paginas
    public function getPage(Request $request){
        //Por padrão vou passar "page 1" para minha URL
        $page = $request->input('page', 1);
        $paginas = json_decode(file_get_contents("https://swapi.co/api/people/?page={$page}"));
        return view('index', ['pessoas' => $paginas, 'page' => $page]);
    }

    //Função responsavel por pegar um personagem especifico
    public function getPersonagem($id){

        $personagem = json_decode(file_get_contents("https://swapi.co/api/people/{$id}"));  
        return view('pages.info', ['pessoa' => $personagem]);
    }
    
}
