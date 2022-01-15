<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public const ROOM_A_ID = 1;
    public const ROOM_B_ID = 2;

    protected $guarded = [];

    public function room() {
        return $this->hasMany(Room::class);
    }
}
