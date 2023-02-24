<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RegisterController extends Controller
{
    public function register()
    {
        return view('frontend.register');
    }

    public function postRegister(RegisterRequest $request){
        $data = $request->except('_token');
        DB::beginTransaction();
       
        try {
            user::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
            ]);
            DB::commit();
        }catch (\Throwable $t) {
            DB::rollback();
            Log::info($t->getMessage());
            throw new ModelNotFoundException();
        }
        return redirect(route('login'))
            ->with('message', 'Đăng kí tài thành công. Hãy kích hoạt!')
            ->with('type_alert', "success");
    }
}
