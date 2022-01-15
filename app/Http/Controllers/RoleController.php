<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function get_role_list() {
        $user = auth()->user();
        $this->authorize('viewAny', $user); // Policy をチェック
        $roles = \App\Models\Role::get(); // 役職一覧を取得
        return view('roles.list', compact('roles'));
    }
}
