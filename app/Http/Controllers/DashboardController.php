<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function show(Request $request): View {
        return view('dashboard', ['user'=> $request->user()]);
    }
}
