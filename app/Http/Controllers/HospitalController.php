<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{

    function hospitals(){
        $data = DB::select('select * from hospital');

return view('dashboard.hospital.index',compact('data'));
    }
    function addhospital(){
return view('dashboard.hospital.insert');
    }
    function storehospital(Request $req){
        $req->validate([
'hname'=>'required|max:50',
'hnum'=>'required',
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
         hwebsite, hstatus) VALUES (?,?,?,?,?,?,?,?)', [$req->hname,$req->haddress,$req->hcity
         ,$req->hnum,$req->hmail,$imgname,$req->hweb,$req->h_st]);

        return redirect('/dashboard/hospital');

    }

    
    function edithospital($id){
        $result=Db::select('select *from hospital where hid=?',[$id]);
       return view('dashboard.hospital.edit',compact('result'));
    }


    function updatehospital(Request $req, $id)
    {
        $req->validate([
'hname'=>'required|max:50',
'hnum'=>'required',
'hmail'=>'required|email',
'hweb'=>'required|url',
'haddress'=>'required',
'hcity'=>'required'

        ]);

        $result=Db::select('select * from hospital where hid=?',[$id]);
        if($result){
            if($req->himg){

            $img=$req->himg;
            $imgname=$img->getClientoriginalName();
            $imgname="hospitalimg/". Str::random(2) ."__".$imgname;
            $img->move("hospitalimg/",$imgname);
         
        }
        else{
            $imgname=$req->oldimg;
        }

        $name=$req['hname'];
        $address=$req['haddress'];
        $city=$req['hcity'];
        $num=$req['hnum'];
        $mail=$req['hmail'];
        $web=$req['hweb'];
        $status=$req['hstatus'];
        DB::UPDATE("UPDATE `hospital` SET `hname`='$name',`haddress`='$address',
`hcity`='$city',`hpnumber`='$num',`hemail`='$mail'
,`h_pic`='$imgname',`hwebsite`='$web',`hstatus`='$status' where hid = $id");







        return redirect('/dashboard/hospital');

        return redirect('/dashboard/hospital');
    }}
    function deletehospital($id){
        $result=Db::select('select * from hospital where hid=?',[$id]);
        if($result){
            Db::delete('delete from hospital where hid=?',[$id]);
            return redirect('/dashboard/hospital');
        }
        return redirect('/dashboard/hospital');
    }
}
