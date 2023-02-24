<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Recharger;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function indexAction(){
        $data = User::orderBy('created_at', 'DESC')->paginate(15);
        return view('backend.modules.user.index', compact('data'));
    }

    public function rechargerAction($id){
        $data = User::find($id);
        return view('backend.modules.user.form', compact('data'));
    }

    public function postRechargerAction(Request $request){
        $data = $request->except('_token');
        DB::beginTransaction();
        try {
            $user = User::find($data['id_user']);
            if ($user) {
                $user->total_money = $data['money'] + $user->total_money;
                $user->save();
            }
            $success = Recharger::create([
                'id_user' => $data['id_user'],
                'method' => $data['method'],
                'money' => $data['money'],
            ]);
            DB::commit();
            if ($success)
            {

                return redirect(route('admin.users'))
                ->with('message', 'Nạp tiền thành công !')
                ->with('type_alert', "success");
            }
            
        } catch (\Throwable $t) {
            DB::rollback();
            Log::info($t->getMessage());
            throw new ModelNotFoundException();
        }
    }
}
