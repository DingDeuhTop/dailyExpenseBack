<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    public function buy()
    {
        return $this->belongsTo(Buy::class);
    }

    protected $guarded = ['id'];
}
