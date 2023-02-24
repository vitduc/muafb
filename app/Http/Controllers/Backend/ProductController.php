<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function indexAction()
    {
        $data = Product::orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.modules.product.index', compact('data'));
    }

    public function create(){
        $categories  = Category::orderBy('created_at', 'DESC')->get();
        return view('backend.modules.product.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        DB::beginTransaction();
        try {
            Product::create([
                'id_category' => $data['id_category'],
                'name' => $data['name'],
                'content' => $data['content'],
                'country' => $data['country'],
                'available' => $data['available'],
                'description' => $data['description'],
                'price' => $data['price'],
            ]);
            DB::commit();
            return redirect(route('admin.product'))
            ->with('message', 'Thêm sản phẩm thành công !')
            ->with('type_alert', "success");
        } catch (\Throwable $t) {
            DB::rollback();
            Log::info($t->getMessage());
            throw new ModelNotFoundException();
        }

    }

    public function edit($id){
        $categories  = Category::orderBy('created_at', 'DESC')->get();
        $product = Product::find($id);
        return view('backend.modules.product.edit', compact('categories', 'product'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');
        DB::beginTransaction();
        try {
            $product = Product::find($data['id']);
            if ($product) {
                $product->id_category = $data['id_category'];
                $product->name = $data['name'];
                $product->content = $data['content'];
                $product->country = $data['country'];
                $product->available = $data['available'];
                $product->description = $data['description'];
                $product->price = $data['price'];
                $product->save();
            }
            DB::commit();
            return redirect(route('admin.product'))
            ->with('message', 'Update sản phẩm thành công !')
            ->with('type_alert', "success");
        } catch (\Throwable $t) {
            DB::rollback();
            Log::info($t->getMessage());
            throw new ModelNotFoundException();
        }

    }

    public function deleteAction($id)
    {
        if ($id) {
            Product::destroy($id);
            return redirect(route('admin.product'))
            ->with('message', 'Xóa sản phẩm thành công !')
            ->with('type_alert', "success");
        } else 
        {
            return redirect(route('admin.category'))
            ->with('message', 'Xóa sản phẩm thất bại !')
            ->with('type_alert', "waring");
        }
    }
}
