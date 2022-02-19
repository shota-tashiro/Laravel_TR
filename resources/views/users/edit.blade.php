@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">社員情報編集</div>
                    <form class="card-body" action="/users/{{ $user->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="id" value="{{ $user->id }}">
                            </div>
                            <div class="pb-2">
                                <label class="mb-0">氏名：</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" placeholder="氏名を入力してください">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">社員番号：</label>
                                <input type="text" class="form-control" name="employee_num" value="{{ old('employee_num', $user->employee_num) }}" placeholder="社員番号を入力して下さい  ※数字四桁">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">年齢：</label>
                                <input type="text" class="form-control" name="age" value="{{ old('age', $user->age) }}" placehodler="年齢を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">生年月日：</label>
                                <input type="text" class="form-control" name="birthday" value="{{ old('birthday', $user->brithday) }}" placeholder="生年月日を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">役職：</label>
                                <select class="form-control" name="role_id" >
                                    <option value="2" {{ $user->role_id===2 ? 'selected' ： "" }}>一般社員</option>
                                    <option value="1" {{ $user->role_id===1 ? 'selected' ： "" }}>マネージャー</option>
                                </select>
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">郵便番号：</label>
                                <input type="text" class="form-control" name="postal" value="{{ old('postal', $user->postal) }}" placeholder="郵便番号を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">住所：</label>
                                <input type="text" class="form-control" name="address" value="{{ old('address', $user->address) }}" placeholder="住所を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">電話番号：</label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="電話番号を入力して下さい">
                            </div>

                            <div class="pb-2">
                                <label class="mb-0">メールアドレス：</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}" placeholder="メールアドレスを入力して下さい">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">更新</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection