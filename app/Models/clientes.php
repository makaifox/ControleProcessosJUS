<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [ 'nummeroProcesso','tribunal','comarca','orgao','autor','reu','estado','status','andamento'];
}
