<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['slug', 'title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'];
}
