<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function show(Request $request): View {
        return view('dashboard', ['user'=> $request->user()]);
    }

    public function becomeAuthor(Request $request) {
        $request->user()->role = 'author';
        $request->user()->save();

        return redirect()->back()->with('status', 'You are now an author! Start uploading your posts.');
    }
}
