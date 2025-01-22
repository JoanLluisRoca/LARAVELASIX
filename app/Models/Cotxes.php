<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Afegir el trait HasFactory
use Illuminate\Database\Eloquent\Model;

class Cotxes extends Model
{
    use HasFactory; // Afegir el trait HasFactory

    /**
     * La taula associada al model.
     *
     * @var string
     */
    protected $table = 'cotxes';

    /**
     * Els atributs que es poden assignar massivament.
     *
     * @var array
     */
    protected $fillable = [
        'brand',
        'model',
        'any_fabricacio',
        'price',
        'categoria',
    ];

    /**
     * Els atributs que haurien de ser tractats com dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Els valors per defecte dels atributs.
     *
     * @var array
     */
    protected $attributes = [
        'price' => 0,
    ];
}
