<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const MANAGER_ID = 1;
    public const MEMBER_ID = 2;

    protected $guarded = [];

    public function user() {
        return $this->hasMany(User::class);
    }
}
