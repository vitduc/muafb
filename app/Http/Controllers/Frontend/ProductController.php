<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $products = DB::table('products')
            ->join('category', 'products.id_category', '=', 'category.id')
            ->select('products.*', 'category.name')
            ->get();
        return view('frontend.modules.product', compact('categories', 'products'));
    }
}
