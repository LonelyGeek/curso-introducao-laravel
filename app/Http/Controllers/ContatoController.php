<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){

    	$contatos = [
         (object)["nome"=>"Maria","Telefone"=>"321311"],
         (object)["nome"=>"Pedro","Telefone"=>"331231"],
    	];


        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

    	return 	view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){

    	dd($req->all());
    	return 	"esse é o criar controle do ContatoController";
    }

    public function editar(){
    	return 	"esse é o editar controle do ContatoController";
    }


}
