<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;

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
    Flash::success("Registro exitoso")->important();
    return redirect()->route('users.index');
    //return $this->index();
    //dd('Usuario  Creado');

  }


  public function destroy($id){
    //dd('hola esto es un mensaje de destroy');
    //return view('admin.users.create');
    $user = User::find($id);
    $user->delete();
    Flash::warning("Usuario Borrado exitosamente")->important();
    return redirect()->route('users.index');


  }


  public function edit($id){
  //  dd('hola esto es un mensaje de edit');
    //return view('admin.users.create');
     $user = User::find($id);
    // dd($user);
    // $user->delete();
    // Flash::warning("Usuario Borrado exitosamente")->important();
    // return redirect()->route('users.index');
      return view('admin.users.edit')->with('user', $user);


  }


  public function update(Request $request,$id){
   //dd($request->all());

   $user = User::find($id);
   $user->name = $request->name;
   $user->email = $request->email;
   $user->type = $request->type;
   $user->save();
   Flash::success("Usuario Actualizado")->important();

   return redirect()->route('users.index');




    //return $this->index();
    //dd('Usuario  Creado');

  }




}
