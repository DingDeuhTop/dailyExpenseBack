<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, string $filter = null)
    {
        return $query->when(
            $filter,
            fn ($q) => $q->where(
                'name',
                $filter
            )
        );
    }

    public function ba()
    {
        return $this->hasMany(Ba::class);
    }
    public function sell()
    {
        return $this->belongsTo(Sell::class);
    }
}
