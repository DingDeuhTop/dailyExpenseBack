<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    public function sell()
    {
        return $this->hasMany(Sell::class);
    }

    protected $guarded = ['id'];
}