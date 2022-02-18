<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * 社員一覧画面を表示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();
        return view('users.list', compact('users'));
    }

    /**
     * 新規社員登録画面を表示
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * 新規社員登録処理を実行
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute = request()->validate([
            'name' => ['required', 'max:20'],
            'employee_num' => ['required', 'Numeric', 'unique:App\Models\User,employee_num'],
            'age' => ['required', 'Numeric'],
            // 'birthday' => ['required', 'Date'],
            'role_id' => ['required'],
            'postal' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'E-Mail'],
            'password' => ['required']
            ]);
        $user = User::create($attribute);
        event(new Registered($user));
        return view('users.completed', compact('user'));
        
    }

    /**
     * 社員詳細情報画面を表示
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * 社員情報編集画面を表示
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * 社員情報更新処理を実行
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        $rules = [
            'name' => ['required', 'max:20'],
            //更新時はuniqueでバリデーションかけると更新前の値と比較してエラーが発生してしまう。
            // 'employee_num' => ['required', 'numeric', 'unique:users,employee_num'],
            'age' => ['required', 'numeric'],
 
            'role_id' => ['required'],
            'postal' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email']
        ];
        $this->validate($request, $rules);

        $user = User::find($user->id);
        
        $user->name = $request->input('name');
        $user->employee_num = $request->input('employee_num');
        $user->age = $request->input('age');
        // $user->birthday = $request->input('birthday');
        $user->role_id = $request->input('role_id');
        $user->postal = $request->input('postal');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->save();
        
        
        return view('users.show', compact('user'));
    }

    /**
     * 社員情報削除処理を実行
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
