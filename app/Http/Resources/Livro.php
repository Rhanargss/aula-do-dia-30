<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Livros;


class Livro extends JsonResource
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
            'titulo'=>$this->titulo,
            'autor'=>$this->autor,
            'editora'=>$this->editora,
            'versao'=>$this->versao,
            'anoDeLancamento'=>$this->anoDeLancamento,
            'qntEstoque'=>$this->qntEstoque,
            'qntEmprestada'=>$this->qntEmprestada,

        ];

    }

}
