<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reunioe;
use App\Models\Convidado;


class reuniaoController extends Controller
{
    public function convidados(){
        $convidados = Convidado::all();
        return response($convidados);
    }

    public function home(){
        $teste="";
        return view('welcome');
    }



    public function usuarios(){
        $users = User::all();
        return response( $users);
    }


    public function reuniao(){
        $reunioes = reunioe::all();
        return response($reunioes);
    }

    public function InsertUser(Request $request){
        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();
    }

    public function InsertReuniao(Request $request){
        $reuniao = new Reunioe;
        $reuniao->name = $request->titulo;
        $reuniao->data = $request->data;
        $reuniao->hora = $request->hora;
        $reuniao->save();
    }

    public function InsertConvidado(Request $request){
        $convidados = new Convidado;
        $convidados->name = $request->convidado;
        $convidados->email = $request->email;
        $convidados->idreuniao = $request->reuniaoid;
        $convidados->save();
    }
}
