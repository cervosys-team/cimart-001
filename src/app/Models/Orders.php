<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function OrderItems()
    {
        return $this->hasMany(OrderItems::class, 'order_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

