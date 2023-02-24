<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function indexAction()
    {
        $data = Notification::orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.modules.notification.index', compact('data'));
    }

    public function editAction($id)
    {
        $data = Notification::find($id);
        return view('backend.modules.notification.form', compact('data'));
    }

    public function postAction(Request $request)
    {
        $data = $request->except('_token');

        $id = $data['id'] ?? 0;
        if ($id != 0){
            DB::beginTransaction();
            try {
                $notification = Notification::find($data['id']);
                if ($notification) {
                    $notification->name = $data['name'];
                    $notification->content = $data['content'];
                    $notification->status = $data['status'];
                    $notification->save();
                }
                DB::commit();
                return redirect(route('admin.notification'))
                ->with('message', 'Update thông báo thành công !')
                ->with('type_alert', "success");
            } catch (\Throwable $t) {
                DB::rollback();
                Log::info($t->getMessage());
                throw new ModelNotFoundException();
            }
        }
        else
        {
            DB::beginTransaction();
            try {
                Notification::create([
                    'name' => $data['name'],
                    'content' => $data['content'],
                    'status' => $data['status'],
                ]);
                DB::commit();
                return redirect(route('admin.notification'))
                ->with('message', 'Thêm notification thành công !')
                ->with('type_alert', "success");
            } catch (\Throwable $t) {
                DB::rollback();
                Log::info($t->getMessage());
                throw new ModelNotFoundException();
            }
        }
        
    }

    public function deleteAction ($id)
    {
        if ($id) {
            Notification::destroy($id);
            return redirect(route('admin.notification'))
            ->with('message', 'Xóa thông báo thành công !')
            ->with('type_alert', "success");
        } else 
        {
            return redirect(route('admin.category'))
            ->with('message', 'Xóa thông báo thất bại !')
            ->with('type_alert', "waring");
        }

    }
}
