<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reserve extends Model
{
    use HasFactory;

    public const ROOM_A = 1;
    public const ROOM_B = 2;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reserve_date',
        'room_id',
        'start_time',
        'end_time',
    ];





    public function room(){
        return $this->belongsTo(Room::class);
    }


}
