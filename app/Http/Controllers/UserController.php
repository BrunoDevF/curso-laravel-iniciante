<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return view('indexUser');
    }
    public function store(UserRequest $userRequest)
    {
        // dd('OK!!!!!Cadastro de usuario feito com sucesso!!!!');
        $user = new User();
        $user->name = $userRequest->name;
        $user->email = $userRequest->email;
        $user->password = Hash::make($userRequest->password);
        $user->save();
        $users = User::all();
        return view('listUser',[
            'users'=> $users
        ]);
    }
    public function listUser(){
        // $user = new User();
        // $user->name = 'Bruno Henrique';
        // $user->email = 'brunohenrique123@gmail.com';
        // $user->password = Hash::make('123456');
        // $user->save();
        
        //echo "<h1>Listagem de usuarios</h1>";
        $user = User::where('id','=',1)->first();
        $users = User::all();
        return view('listUser', [
            'userList'=> $user,
            'users'=> $users
        ]);
    }
}
