<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Cliente;


class Clientes extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'telefone'=>$this->telefone,
            'dataDeNascimento'=>$this->dataDeNascimento,
            'endereco'=>$this->endereco,
            'nome'=>$this->nome,
            'cpf'=>$this->cpf,

        ];

    }

}
