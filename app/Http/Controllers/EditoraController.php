<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

class EditoraController extends Controller
{
    //

        public function index()
    {
      $editoras = Editora::all();
      return view('editora.index', compact('editoras'));
    }

        public function cria()
    {
      return view('editora.cria');
    }

        public function armazena()
    {
      Editora::create(request()->all());

      return redirect('/editoras');
    }

    public function edita(Editora $editora)
    {
        //prorurando editora
        //$editora = Editora::find($id);

        return view('editora.edita', compact('editora')); //compact editora nome da variavel
    }

    public function atualiza($id)
    {
      $editora = Editora::find($id);
      //dd(request()->all());
      $editora->fill(request()->all());
      $editora->save();
      return redirect('/editoras');
    }

}
