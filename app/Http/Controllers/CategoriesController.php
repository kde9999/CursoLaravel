<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{




  public function create(){
    //dd('hola esto es un mensaje');
    return view('admin.categories.create');
  }

  public function store(CategoryRequest $request){
    //  dd('exito');

       $category = new Category($request->all());
      // $user->password =bcrypt( $request->password);
        $category->save();
       Flash::success("Registro exitoso de Categoria")->important();
       return redirect()->route('categories.index');

       //return redirect()->route('categor.index');

      //return $this->index();
      //dd('Usuario  Creado');

  }


  public function index(){
    //dd('test ruta index');
    $categories=Category::orderBy('id','ASC')->paginate(5);
    return view('admin.categories.index')->with('categories',$categories);
  }










    public function destroy($id){
      dd('hola esto es un mensaje de destroy');
      //return view('admin.users.create');
      // $user = User::find($id);
      // $user->delete();
      // Flash::warning("Usuario Borrado exitosamente")->important();
      // return redirect()->route('users.index');


    }


    public function edit($id){
      dd('hola esto es un mensaje de edit');
      //return view('admin.users.create');
      //  $user = User::find($id);
      // // dd($user);
      // // $user->delete();
      // // Flash::warning("Usuario Borrado exitosamente")->important();
      // // return redirect()->route('users.index');
      //   return view('admin.users.edit')->with('user', $user);


    }



    public function update(Request $request,$id){
         //dd($request->all());
        //  $user = User::find($id);
        //  $user->name = $request->name;
        //  $user->email = $request->email;
        //  $user->type = $request->type;
        //  $user->save();
        //  Flash::success("Usuario Actualizado")->important();
         //
        //  return redirect()->route('users.index');




          //return $this->index();
          //dd('Usuario  Creado');

    }














}
