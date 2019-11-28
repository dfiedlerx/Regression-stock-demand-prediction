<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendaMensal extends Model
{
    protected $table = 'vendas_mensais';

    protected $fillable =
        [
            'product_id',
            'mounth',
            'sales'
        ];

}
