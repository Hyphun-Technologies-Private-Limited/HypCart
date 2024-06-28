<?php

namespace Hyphun\HypCart\Models;

use Illuminate\Database\Eloquent\Model;

class HypOrder extends Model
{
    protected $fillable = ['product_id', 'quantity'];
}
