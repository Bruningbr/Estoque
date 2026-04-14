<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliete extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "cpf",
        "idade"
    ];

    public function entradas(): HasMany
    {
        return $this->hasMany(Entrada::class, 'id_cliente');
    }

    public function saidas(): HasMany
    {
        return $this->hasMany(Saida::class, 'id_cliente');
    }
}
