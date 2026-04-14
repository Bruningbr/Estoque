<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entrada extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_cliente",
        "id_produto",
        "quantidade"
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliete::class, 'id_cliente');
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class, 'id_produto');
    }
}
