<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;


class HomeController extends Controller
{
    function user()
    {
        $data = DB::select('select * from users');

        return view('dashboard.user.index', compact('data'));
    }
    
    function deleteuser($id){
        $result=Db::select('select * from users where uid=?',[$id]);
        if($result){
            Db::delete('delete from users where uid=?',[$id]);
            return redirect('/dashboard/user');
        }
        return redirect('/dashboard/user');
    }

    function register(){
        return view('website.register');
    }
    function registerstore(Request $req){
        $req->validate([
'uname'=>'required',
'umail'=>'required',
'upass'=>'required',

        ]);

        DB::insert('INSERT INTO `users`(`uname`, `uemail`, `upassword`,`roll`) VALUES
        (?,?,?,?)',[$req->uname,$req->umail,md5($req->upass),0]);


        return redirect('/');


    }

    function login(){
        return view('website.login');
    }

    function loginstore(Request $req){
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


return redirect('/');
        }
        return redirect('/login');

}

public function logout(){
    session()->forget('uid');
    session()->forget('uemail');
    session()->forget('roll');
    return redirect('/login');
}
function index(){
    return view('website.index');
}

function about(){
    return view('website.about');
}
function symptoms(){
    return view('website.symptoms');
}

function prevention(){
    return view('website.prevention');
}

function blog(){
    return view('website.blog');
}


function faq(){
    return view('website.faq');
}

function contact(){
    return view('website.contact');
}
function comming(){
    return view('website.comingsoon');
}

function trackreport(){

    return view('website.trackreport');
}
function report(){
$row=DB::select('select*from patient_report');

    return view('website.trackreport',compact('row'));


}

function trackstore(Request $req){
    $req->validate(['mail'=>'required']);
    $row=DB::select('select * from appointments where pemail=?'
    , [$req->mail]);
    
    $row=
        DB::select('select * from users where uemail = ? and upassword=?'
        , [$req->mail,md5($req->pass)]);

        if($row){

session()->put('uemail',$row[0]->pemail);



return redirect('/');
        }
        return redirect('/login');


    
    }}


function addhospitalreg(){
    return view('website.about');
}

        function storehospitalreg(Request $req){
            $req->validate([
    'hname'=>'required|max:50',
    'hnum'=>'required|numeric',
    'hmail'=>'required|email',
    'hweb'=>'required|url',
    'hcity'=>'required',
    'himg'=>'required|image|mimes:png,jpg,jpeg',
    'haddress'=>'required|'
            ]);
            $img=$req->himg;
            $imgname=$img->getClientoriginalName();
            $imgname="hospitalimg/". Str::random(2) ."__".$imgname;
            $img->move("hospitalimg/",$imgname);
            DB::insert('INSERT INTO hospital(hname, haddress, hcity, hpnumber, hemail, h_pic,
             hwebsite, hstatus) VALUES (?,?,?,?,?,?,?,?)', 
             [$req->hname,$req->haddress,$req->hcity,$req->hnum,$req->hmail,$imgname,$req->hweb,$req->h_st]);
    
            return redirect('/pages/hospital');
    
        }

        function hospitals(){
            $data = DB::select('select * from hospital');
    
    return view('website.hospital',compact('data'));
        }

        function hospitaldetails($id){
            $result = DB::select('select * from hospital where hid=?',[$id]
          );
         
            return view('website.details' ,compact('result'));
        }



    
    
    
