<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livros;

class LivrosController extends Controller{
    
    // Cadastra um livro //

    public function create (Request $request){
        $livros = new Livros;

        $livros->titulo = $request->titulo;
        $livros->autor = $request->autor;
        $livros->editora = $request->editora;
        $livros->versao = $request->versao;
        $livros->anoDeLancamento = $request->anoDeLancamento;
        $livros->qntEstoque = $request->qntEstoque;
        $livros->qntEmprestada = $request->qntEmprestada;
        $livros->save();
        return response()->json([$livros]);

    }

    // Verifica os livros cadastrados //

    public function list(){
        return Livros::all();

    }

    // Verifica o livro pelo id //

    public function show($id){
        $livros = Livros::findOrFail($id);
        return response()->json([$livros]);

    }

    // Edita alguma informação //

    public function update(Request $request, $id){
        $livros = Livros::findOrFail($id);
        if($request->titulo)
        $livros->titulo = $request->titulo;
        if($request->autor)
        $livros->autor = $request->autor;
        if($request->editora)
        $livros->editora = $request->editora;
        if($request->versao)
        $livros->versao = $request->versao;
        if($request->anoDeLancamento)
        $livros->anoDeLancamento = $request->anoDeLancamento;
        if($request->qntEstoque)
        $livros->qntEstoque = $request->qntEstoque;
        if($request->qntEmprestada)
        $livros->qntEmprestada = $request->qntEmprestada;
        $livros->save();
        return response()->json([$livros]);

    }

    // Deleta algum cadastro // 

    public function delete($id){
        Livros::destroy($id);
        return response()->json(['DELETADO']);

    }

} 

