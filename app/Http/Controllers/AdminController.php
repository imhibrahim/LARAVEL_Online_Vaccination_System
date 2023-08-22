<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class AdminController extends Controller
{
    function adminlog(){
        return view('dashboard.adminform.login');
    }

    function adminlogstore(Request $req){
        $req->validate([
'mail'=>'required',
'pass'=>'required',
        ]);

        $row=
        DB::select('select * from users where uemail = ? and upassword=?'
        , [$req->mail,md5($req->pass)]);

        if($row){
session()->put('uid',$row[0]->uid);
session()->put('uemail',$row[0]->uemail);
session()->put('roll',$row[0]->roll);


return redirect('/dashboard');

        }
        return redirect('/adminlogin');

}
}
