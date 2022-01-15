<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use App\Calendar\Reserved;
use App\Models\Reserve;

class ReserveController extends Controller
{
    public function calendar(){
		
		$calendar = new CalendarView(time());

		return view('reserve.calendar', ['calendar' => $calendar
		]);
    }


    public function show(Reserve $reserve){
	
        $reserved = new Reserved();

        $room_A = $reserved->get_room_A();

        $room_B = $reserved->get_room_B();

		return view('reserve.reserve', ['reserved' => $reserved], ['room_A' => $room_A, 'room_B' => $room_B]);
    }
    
    public function store(Request $request){
        
        $attribute = request()->validate([
            'reserve_date' => ['required'],
            'room_id' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
            ]);
        $reserve = Reserve::create($attribute);

		return view('reserve.reserved', compact('reserve'));
	}
}
