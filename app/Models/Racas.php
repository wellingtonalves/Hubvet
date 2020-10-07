<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racas extends Model
{
    use HasFactory;

    /**
     * Tabela
     */
    protected $table = 'racas';

    protected $fillable = ['nome'];
}
