<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estimativa extends Model
{

    public function itens() {

        return $this->belongsTo('App\Models\Item', 'product_id');

    }

}
