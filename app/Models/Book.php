<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * Els camps que es poden assignar massivament.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'author',
        'releaseYear',
        'vendes',
        'categoria',
    ];

    /**
     * Els valors per defecte dels atributs.
     *
     * @var array
     */
    protected $attributes = [
        'vendes' => 0, // Per defecte, les vendes són 0
    ];
}

