<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth ;

use App\Models\User;

class AdminController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->data_type;

        if ($usertype == 1){
            return view("admin.adminDashboard");
        }else {
            return view("welcome");
        }
    }
}
