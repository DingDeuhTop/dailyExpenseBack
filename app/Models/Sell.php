<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function buy()
    {
        return $this->belongsTo(Buy::class);
    }

    public function ba()
    {
        return $this->hasMany(Ba::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
