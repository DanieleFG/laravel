<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
    //    $user = new User();
    //     $user -> name ="Bruno Galvão";
    //     $user -> email = "brunogalvao@gmail.com";
    //     $user -> password = Hash::make('123');
    //     $user -> save();
        echo "<h1>Lista de Usuário</h1>";
        $user = User::where('id', 1)->first(); //buscar no banco de dados
        //dd($user);//debugar
       return view('listUser', [
           'user' =>$user
       ]);
    }
}
