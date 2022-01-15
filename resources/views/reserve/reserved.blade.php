@extends('layouts.app')
@section('content')
    <div class="wrapper last-wrapper">
        <div class="container">
            <div class="wrapper-title">
                <h3>以下の内容で予約しました</h3>
            </div>
            <p>予約日：{{ $reserve->reserve_date }}</p>
            <p>会議室：{{ $reserve->room['room_name'] }}</p>
            <p>時間：{{ $reserve->start_time }}〜{{ $reserve->end_time }}</p>

        </div>
    </div>
@endsection