<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{


  public function index(){
    //dd('test ruta index');
    $users=User::orderBy('id','ASC')->paginate(5);
    return view('admin.users.index')->with('users',$users);
  }


  public function create(){
    //dd('hola esto es un mensaje');
    return view('admin.users.create');
  }



  public function store(Request $request){
  //  dd('exito');

    $user = new User($request->all());
    $user->password =bcrypt( $request->password);
    $user->save();
    return $this->index();
    //dd('Usuario  Creado');

  }










}
