<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function postlogin (Request $request){
        $admin = DB::table('admins')->where('username', $request->username)->first();
        if ($admin){
            if (Hash::check($request->password, $admin->password)){
                $pemain = DB::table('pemain')->get();
                return view('pages.admin-page', ['pemain' => $pemain]);
            }
            return redirect('/login-page');
        }
        return redirect('/login-page');
    }
}
