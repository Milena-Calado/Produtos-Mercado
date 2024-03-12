<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'categoria',
        'preco',
        'quantidade',
    ];

    protected $casts = [
        'preco' => 'decimal:2', // Define o campo 'preco' para ser cast como decimal com 2 casas decimais
    ];
}
