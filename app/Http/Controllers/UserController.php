<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function get_user_list() {
    //     $user = auth()->user();
    //     $this->authorize('viewAny', $user); // Policy をチェック
    //     $users = \App\Models\User::get(); // 社員一覧を取得
    //     return view('users.list', compact('users'));
    // }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = auth()->user();
        // $this->authorize('viewAny', $user); // Policy をチェック
        // $users = \App\Models\User::get(); // 社員一覧を取得
        $users = User::paginate();
        return view('users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
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
            'birthday' => ['required', 'Date'],
            'role_id' => ['required'],
            'postal' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'E-Mail'],
            'password' => ['required']
            ]);
        $user = User::create($attribute);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $this->authorize('view', $user);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
