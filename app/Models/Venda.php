<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable =
        [
            'date',
            'date_block_num',
            'shop_id',
            'item_id',
            'item_price',
            'int_cnt_Day'
        ];
}
