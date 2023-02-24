<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function indexAction()
    {
        $data = Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.modules.category.index', compact('data'));
    }

    public function postAction(Request $request)
    {
        $data = $request->except('_token');
        DB::beginTransaction();
        try {
            Category::create([
                'name' => $data['category'],
            ]);
            DB::commit();
            return redirect(route('admin.category'))
            ->with('message', 'Thêm danh mục thành công !')
            ->with('type_alert', "success");
        } catch (\Throwable $t) {
            DB::rollback();
            Log::info($t->getMessage());
            throw new ModelNotFoundException();
        }

        return redirect(route('admin.category'));
    }

    public function deleteAction ($id)
    {
        if ($id) {
            Category::destroy($id);
            return redirect(route('admin.category'))
            ->with('message', 'Xóa danh mục thành công !')
            ->with('type_alert', "success");
        } else 
        {
            return redirect(route('admin.category'))
            ->with('message', 'Xóa danh mục thất bại !')
            ->with('type_alert', "waring");
        }

    }
}
