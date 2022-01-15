@extends('layouts.app')
@section('content')
    <div class="wrapper last-wrapper">
        <div class="container">
            <div class="wrapper-title">
                <h3>予約状況</h3>
            </div>
            <div class="reserve-form">
                <table class="calendar-table">
                    <thead>
                        <th>会議室A</th>
                        <th>会議室B</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>

                            @foreach($room_A as $room_A_reserve)
                                {!! $room_A_reserve->start_time !!}〜{!! $room_A_reserve->end_time !!}
                                <br>
                            @endforeach
                            </td>
                            <td>

                            @foreach($room_B as $room_B_reserve)
                                {!! $room_B_reserve->start_time !!}〜{!! $room_B_reserve->end_time !!}
                                <br>
                            @endforeach

                            

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>

            <div>
                <h4>以下のフォームから予約してください</h4>

            </div>




            <form class="reserve-form" method="POST" action="/reserve">
                @csrf
                <div class="form-group">
                    <label for="reserveDate">予約日</label>
                    <input type="text" class="form-control" id="reserveDate" value="{!! $reserved->get_year() !!}年{!! $reserved->get_month() !!}月{!! $reserved->get_day() !!}日" disabled="disabled">
                    <input type="hidden" name="reserve_date" value="{!! $reserved->get_year() !!}-{!! $reserved->get_month() !!}-{!! $reserved->get_day() !!}">
                </div>
                <div class="form-group">
                    <label for="room">会議室</label>
                    <select name="room_id" class="form-control" required>
                        <option value="1">会議室A</option>
                        <option value="2">会議室B</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="start-time">開始時間</label>
                    <select name="start_time" class="form-control" required>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="end-time">終了時間</label>
                    <select name="end_time" class="form-control" required>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-submit">予約する</button>
            </form>

        </div>
    </div>
@endsection