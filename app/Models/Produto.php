<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        "marca",
        "descricao",
        "valor_unitario",
        "quantidade_estoque",
        "faixa_etaria_minima"
    ];

    public function entradas(): HasMany
    {
        return $this->hasMany(Entrada::class, 'id_produto');
    }

    public function saidas(): HasMany
    {
        return $this->hasMany(Saida::class, 'id_produto');
    }
}
