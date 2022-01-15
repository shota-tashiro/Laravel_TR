@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">新規社員登録</div>
                    <form action="/users" method="POST">
                        @csrf
                        <p>氏名：<input type="text" name="name" value="{{ old('name') }}"></p>
                        <p>社員番号：<input type="text" name="employee_num" value="{{ old('employee_num') }}"></p>
                        <p>年齢：<input type="text" name="age" value="{{ old('age') }}"></p>
                        <p>生年月日：<input type="text" name="birthday" value="{{ old('birthday') }}"></p>
                        <p>役職：
                            <select name="role_id">
                                <option value="2" selected>一般社員</option>
                                <option value="1">マネージャー</option>
                            </select>
                        <p>郵便番号：<input type="text" name="postal" value="{{ old('postal') }}"></p>
                        <p>住所：<input type="text" name="address" value="{{ old('address') }}"></p>
                        <p>電話番号：<input type="text" name="phone" value="{{ old('phone') }}"></p>
                        <p>メールアドレス：<input type="text" name="email" value="{{ old('email') }}"></p>
                        <p>ログイン時パスワード：<input type="password" name="password" value="{{ old('password') }}"></p>
                        <p style="text-align: center"><button class="btn btn-primary" type="submit">　　登　録　　</button></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection