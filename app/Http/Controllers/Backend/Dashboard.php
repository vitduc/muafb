<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class Dashboard extends Controller
{
    //
    public function index()
    {
        $users = User::select('id');
        $product = Product::select('id');
        return view('backend.home', compact('users', 'product'));
    }
}
