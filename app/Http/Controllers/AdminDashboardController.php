<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('dash.admin_index', [
            'title' => 'Admin Dashboard',
            'user' => auth()->user(),
        ]);
    }
}
