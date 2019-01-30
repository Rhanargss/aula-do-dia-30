<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Emprestimo;

use App\Http\Resources\Emprestimos;

class EmprestimoController extends Controller{


    // Verifica os emprestimos realizados //

    public function index (Request $request){
        return Emprestimos::collection(Emprestimo::all());
    
    }


    // Verifica um emprestimo  //

    public function show($id){

        $emprestimo = Emprestimo::findOrFail($id);
        return new Emprestimos($emprestimo);

    }

    /* Cadastra o imprestimo */

    public function store (Request $request){
        $emprestimo = new Emprestimo;

        $emprestimo->status = $request->status;
        $emprestimo->dataDeInicio = $request->dataDeInicio;
        $emprestimo->dataDeTermino = $request->dataDeTermino;
        $emprestimo->save();
        return new Emprestimos($emprestimo);

    }


    // Edita alguma informação //
     
    public function update(Request $request, $id){

        $emprestimo = Emprestimo::findOrFail($id);
        if($request->status)
            $emprestimo->status = $request->status;
        if($request->dataDeInicio)
            $emprestimo->dataDeInicio = $request->dataDeInicio;
        if($request->dataDeTermino)
            $emprestimo->dataDeTermino = $request->dataDeTermino;
        $emprestimo->save();
        return new Emprestimos($emprestimo);

    }


    /* Remove algum cadastro */

    public function destroy($id) {
        Emprestimo::destroy($id);
        return response()->json (['DELETADO']);

    }

}
