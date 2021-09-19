<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){

        $credenciais = $request->all(['email', 'password']);

        // auth.php
        $token = auth('api')->attempt($credenciais);

        if($token){

            return response()->json(['token' => $token], 200);

        }else {
            //401 - unauthorized -> n autorizado
            //403 - forbidden -> proibido
            return response()->json(['erro' => 'Usuário ou senha invaálidos'], 403);

        }

    }
    public function logout(){

        auth('api')->logout();
        return response()->json(['msg' => 'Logout foi realizado com sucesso!']);

    }
    public function refresh(){

        $token = auth('api')->refresh(); // cliente encaminhe um jwt válido
        return response()->json(['token' => $token]);

    }
    public function me(){

        // dados do usuário que recebeu a autorização
        // n exibe a senha
        return response()->json(auth()->user());

    }
}
