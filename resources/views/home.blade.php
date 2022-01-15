@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                            @canany('viewAny', auth()->user())
                                <li><a href="/users/create">新規社員登録</a></li>
                                <li><a href="/users">社員一覧</a></li>
                                <li><a href="/roles">役職一覧</a></li>
                            @endcanany
                            <li><a href="/calendar">会議室予約</a></li> 
                            <li><a href="/minutes">議事録作成</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection