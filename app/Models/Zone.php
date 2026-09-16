<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;
#[Guarded()] // поменять и сделать пустым
class Zone extends Model
{
    public function Orders() {
        return $this->hasMany(Order::class);
    }
}
