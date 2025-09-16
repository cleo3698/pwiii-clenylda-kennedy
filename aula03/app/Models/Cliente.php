<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = 'cliente'; // Nome da tabela

    public $fillable = [ 'id' , 'primeiroNome' , 'sobrenome'];

    public $timestamps = false;

    
}
