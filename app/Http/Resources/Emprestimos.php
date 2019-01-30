<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Emprestimo;

class Emprestimos extends JsonResource
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
            'status'=>$this->status,
            'dataDeInicio'=>$this->dataDeInicio,
            'dataDeTermino'=>$this->dataDeTermino,
            'idCliente'=>$this->idCliente,
            'idLivros'=>$this->idLivros,

        ];

    }

}
