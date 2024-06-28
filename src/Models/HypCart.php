<?php

namespace Hyphun\HypCart\Models;

use Illuminate\Database\Eloquent\Model;

class HypCart extends Model
{
    protected $fillable = ['product_id', 'quantity'];
}
