@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">新規社員登録</div>
                    <form method="post" action="/users" >
                        @csrf
                        
                        <!-- <table>
                            <tr>
                                <td>氏名：<input type="text" name="name" value="{{ old('name') }}"></td>
                            </tr>
                            <tr>
                                <td>社員番号：<input type="text" name="employee_num" value="{{ old('employee_num') }}"></td>
                            </tr>
                        </table> -->
                        <p>氏名：<input type="text" name="name" value="{{ old('name') }}"><span>{{ $errors->first('name') }}</span></p>
                        <p>社員番号：<input type="text" name="employee_num" value="{{ old('employee_num') }}"><span>{{ $errors->first('employee_num') }}</span></p>
                        <p>年齢：<input type="text" name="age" value="{{ old('age') }}"><span>{{ $errors->first('age') }}</span></p>
                        <p>生年月日：<input type="text" name="birthday" value="{{ old('birthday') }}"><span>{{ $errors->first('birthday') }}</span></p>
                        <p>役職：
                            <select name="role_id">
                                <option value="2" selected>一般社員</option>
                                <option value="1">マネージャー</option>
                            </select>
                        </p>
                        <p>郵便番号：<input type="text" name="postal" value="{{ old('postal') }}"><span>{{ $errors->first('postal') }}</span></p>
                        <p>住所：<input type="text" name="address" value="{{ old('address') }}"><span>{{ $errors->first('address') }}</span></p>
                        <p>電話番号：<input type="text" name="phone" value="{{ old('phone') }}"><span>{{ $errors->first('phone') }}</span></p>
                        <p>メールアドレス：<input type="text" name="email" value="{{ old('email') }}"><span>{{ $errors->first('email') }}</span></p>
                        <p>ログイン時パスワード：<input type="password" name="password" value="{{ old('password') }}"><span>{{ $errors->first('password') }}</span></p>
                        <p style="text-align: center"><button class="btn btn-primary" type="submit">　　登　録　　</button></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection