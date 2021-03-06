<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

use App\Http\Resources\Clientes;


class ClientesController extends Controller{

    // Cadastra um cliente //

    public function create (Request $request){
        $cliente = new Cliente;

        $cliente->telefone = $request->telefone;
        $cliente->dataDeNascimento = $request->dataDeNascimento;
        $cliente->endereco = $request->endereco;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->save();
        return new Clientes($cliente);

    }

    // Verifica os clientes cadastrados //

    public function list(){
        return Clientes::collection(Cliente::all());

    }

    // Verifica o cliente pelo id //

    public function show($id){
        $cliente = Cliente::findOrFail($id);
        return new Clientes($cliente);

    }

    // Edita alguma informação //

    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);
        if($request->telefone)
        $cliente->telefone = $request->telefone;
        if($request->dataDeNascimento)
        $cliente->dataDeNascimento = $request->dataDeNascimento;
        if($request->endereco)
        $cliente->endereco = $request->endereco;
        if($request->nome)
        $cliente->nome = $request->nome;
        if($request->cpf)
        $cliente->cpf = $request->cpf;
        $cliente->save();
        return new Clientes($cliente);

    }

    //Deleta algum cadastro// 

    public function delete($id){
        Cliente::destroy($id);
        return response()->json(['DELETADO']);

    }

}
