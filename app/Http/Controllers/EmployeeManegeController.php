<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeManegeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showEmployeeManegeMenu()
    {
        return view('users.employee');
    }
}
