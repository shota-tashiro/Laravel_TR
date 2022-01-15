<?php
namespace App\Calendar;

use \App\Models\Reserve;

class Reserved {



	function __construct(){
        $y = isset($_GET['y'])? htmlspecialchars($_GET['y'], ENT_QUOTES, 'utf-8') : '';
        $m = isset($_GET['m'])? htmlspecialchars($_GET['m'], ENT_QUOTES, 'utf-8') : '';   
        $d = isset($_GET['d'])? htmlspecialchars($_GET['d'], ENT_QUOTES, 'utf-8') : '';
        $date = $y.'-'.$m.'-'.$d;

    }  

    function get_year(){
        $y = isset($_GET['y'])? htmlspecialchars($_GET['y'], ENT_QUOTES, 'utf-8') : '';
        return $y;
    }

    function get_month(){
        $m = isset($_GET['m'])? htmlspecialchars($_GET['m'], ENT_QUOTES, 'utf-8') : ''; 
        return $m;
    }

    function get_day(){
        $d = isset($_GET['d'])? htmlspecialchars($_GET['d'], ENT_QUOTES, 'utf-8') : '';  
        return $d;
    }

    function get_room_A(){
        $y = isset($_GET['y'])? htmlspecialchars($_GET['y'], ENT_QUOTES, 'utf-8') : '';
        $m = isset($_GET['m'])? htmlspecialchars($_GET['m'], ENT_QUOTES, 'utf-8') : '';   
        $d = isset($_GET['d'])? htmlspecialchars($_GET['d'], ENT_QUOTES, 'utf-8') : '';
        $date = $y.'-'.$m.'-'.$d;

        $room_A_reserve = Reserve::where('reserve_date', $date)->where('room_id', 1)->get();

        return $room_A_reserve;

    }

    function get_room_B(){
        $y = isset($_GET['y'])? htmlspecialchars($_GET['y'], ENT_QUOTES, 'utf-8') : '';
        $m = isset($_GET['m'])? htmlspecialchars($_GET['m'], ENT_QUOTES, 'utf-8') : '';   
        $d = isset($_GET['d'])? htmlspecialchars($_GET['d'], ENT_QUOTES, 'utf-8') : '';
        $date = $y.'-'.$m.'-'.$d;

        $room_B_reserve = Reserve::where('reserve_date', $date)->where('room_id', 2)->get();

        return $room_B_reserve;

    }

}
?>