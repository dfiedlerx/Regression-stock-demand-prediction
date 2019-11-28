<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'itens';

    protected $fillable =
        [
            'name',
            'category_id',
            'stock'
        ];

    public function categorias() {

        return $this->belongsTo('App\Models\Categoria', 'category_id');

    }

}
