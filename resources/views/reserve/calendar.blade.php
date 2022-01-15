@extends('layouts.app')
@section('content')
    <div class="wrapper last-wrapper">
        <div class="container">
            <div class="wrapper-title">
                <h3>予約状況 {{ $calendar->getTitle() }}</h3>
            </div>

            {!! $calendar->renderCalendar() !!}

        </div>
    </div>
@endsection