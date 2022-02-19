@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">新規社員登録</div>
                    <form class="card-body" method="post" action="/users" >
                        @csrf
                        <div class="form-group">
                            <div class="pb-2">
                                <label class="mb-0">氏名：</label><span>{{ $errors->first('name') }}</span>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="氏名を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">社員番号：</label><span>{{ $errors->first('employee_num') }}</span>
                                <input type="text" class="form-control" name="employee_num" value="{{ old('employee_num') }}" placeholder="社員番号を入力して下さい  ※数字四桁">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">年齢：</label><span>{{ $errors->first('age') }}</span>
                                <input type="text" class="form-control" name="age" value="{{ old('age') }}" placeholder="年齢を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">生年月日：</label><span>{{ $errors->first('birthday') }}</span>
                                <input type="text" class="form-control" name="birthday" value="{{ old('birthday') }}" placeholder="生年月日を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">役職：</label>
                                <select class="form-control" name="role_id">
                                    <option value="2" selected>一般社員</option>
                                    <option value="1">マネージャー</option>
                                </select>
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">郵便番号：</label><span>{{ $errors->first('postal') }}</span>
                                <input type="text" class="form-control" name="postal" value="{{ old('postal') }}" placeholder="郵便番号を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">住所：</label><span>{{ $errors->first('address') }}</span>
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="住所を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">電話番号：</label><span>{{ $errors->first('phone') }}</span>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="電話番号を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">メールアドレス：</label><span>{{ $errors->first('email') }}</span>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">ログイン時パスワード：</label><span>{{ $errors->first('password') }}</span>
                                <input type="password" class="form-control" name="password" placeholder="ログイン時パスワードを入力して下さい">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">登録</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection