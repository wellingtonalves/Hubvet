<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Especies extends Model
{
    use HasFactory;

    /**
     * Tabela
     */
    protected $table = 'especies';

    protected $fillable = ['nome'];

    /**
     * Racas ->
     */
    public function racas()
    {
        return $this->hasMany(Racas::class);
    }
}
