@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"></div>
                    <p>氏名：{{ $user->name }}</p>
                    <p>社員番号：{{ $user->employee_num }}</p>
                    <p>年齢：{{ $user->age }}</p>
                    <p>生年月日：{{ $user->birthday }}</p>
                    <p>役職：{{ $user->role['role_name'] }}</p>
                    <p>郵便番号：{{ $user->postal }}</p>
                    <p>住所：{{ $user->address }}</p>
                    <p>電話番号：{{ $user->phone }}</p>
                    <p>メールアドレス：{{ $user->email }}</p>
                    <p>更新日：{{ $user->created_at }}</p>
                    <p>登録日：{{ $user->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection