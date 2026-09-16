<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;
#[Guarded()] // поменять и сделать пустым
class Order extends Model
{
    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Zone() {
        return $this->belongsTo(Zone::class);
    }
}
