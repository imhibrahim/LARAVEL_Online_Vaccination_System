<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;



class VaccineController extends Controller
{

    function vaccines(){
        $data = DB::select('select * from vaccine');

return view('dashboard.vaccine.index',compact('data'));
    }
    function addvaccine(){
return view('dashboard.vaccine.insert');
    }
    function storevaccine(Request $req){
        $req->validate([
'vname'=>'required',
'vbatch'=>'required',
'vexp'=>'required',
'vmanu'=>'required',
'vage'=>'required',
        ]);

        DB::insert(
            'insert into vaccine (v_name,v_Manufacturer,v_Batch_Number,v_Expiration_Date,
            v_Recommended_Age,v_Dose_Count, v_status)
             values(?,?,?,?,?,?,?)',
            [$req->vname, $req->vmanu, $req->vbatch, $req->vexp, $req->vage, $req->vdose, $req->vstatus]
        );

 
 


        return redirect('/dashboard/vaccine');

    }
    function editvaccine($id){
        $result=Db::select('select *from vaccine where v_id=?',[$id]);
       return view('dashboard.vaccine.edit',compact('result'));

    }
    function updatevaccine(Request $req,$id){
        $req->validate([
            'hname'=>'required|max:50',
'hnum'=>'required|numeric',
'hmail'=>'required|email',
'hweb'=>'required|url',
'himg'=>'required|image|mimes:png,jpg,jpeg',
'haddress'=>'required|'

        ]);
        $result=Db::select('select *from vaccine where v_id=?',[$id]);
        if($result){
            if($req->dimg){

            $img=$req->img;
            $imgname=$img->getClientoriginalName();
            $imgname="vaccineimg/". Str::random(2) ."__".$imgname;
            $img->move("vaccineimg/",$imgname);
            unlink($req->oldimg);
        }
        else{
            $imgname=$req->oldimg;
        }

            Db::update('UPDATE vaccine`SET`v_name`=?,`v_Manufacturer`=?,`v_Batch_Number`=?,`v_Expiration_Date`=?,`v_Recommended_Age`=?,`v_Dose_Coun`=?,`v_status`=?,
    [$req->vname,$req->vmanu,$req->vbatch,$req->vexp,$req->vage,$req->vdose,$req->vstatus]');
        return redirect('/dashboard/vaccine'); }
        return redirect('/dashboard/vaccine');
    }
    function deletevaccine($id){
        $result=Db::select('select * from vaccine where v_id=?',[$id]);
        if($result){
            Db::delete('delete  from vaccine where v_id=?',[$id]);
            return redirect('/dashboard/vaccine');
        }
        return redirect('/dashboard/vaccine');
    }
}
