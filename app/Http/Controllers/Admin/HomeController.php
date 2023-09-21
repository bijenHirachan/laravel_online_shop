<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return 'Welcome '. Auth::guard('admin')->user()->name;
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
        ->route('admin.login');
    }
}
