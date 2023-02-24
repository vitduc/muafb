<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankTransferController extends Controller
{
    public function indexAction()
    {
        return view('frontend.modules.bank');
    }
}
