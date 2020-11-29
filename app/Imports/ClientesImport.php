<?php

namespace App\Imports;

use App\User;
use App\Models\clientes;
use Maatwebsite\Excel\Concerns\ToModel;
use Excel;


class ClientesImport implements ToModel 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new clientes([
            'nummeroProcesso' =>  $row[0],
            'tribunal' =>  $row[1],
            'comarca' =>  $row[2],
            'orgao' =>  $row[3],
            'autor' =>  $row[4],
            'reu' =>  $row[5],
            'estado' =>   $row[6],
            'status' =>   $row[7],
            'andamento' =>   $row[8],

         ]);

         
    }

}
