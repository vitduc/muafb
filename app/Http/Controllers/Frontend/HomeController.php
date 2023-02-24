<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexAction() {
        $categories = Category::all();
        $products = DB::table('products')
            ->join('category', 'products.id_category', '=', 'category.id')
            ->select('products.*', 'category.name')
            ->get();
        $notifications = Notification::where('status', '=', 1)->get();
        return view('frontend.modules.home', compact('categories', 'products', 'notifications'));
    }
}
