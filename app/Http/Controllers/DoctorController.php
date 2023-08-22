<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;



class DoctorController extends Controller
{
    function doctors()
    {
        $data = DB::select('select * from doctor inner join hospital on doctor.hid = hospital.hid');

        return view('dashboard.doctor.index', compact('data'));
    }
    function adddoctor()
    {
        $data=DB::select('select * from hospital');
        return view('dashboard.doctor.insert',compact('data'));
    }
    function storedoctor(Request $req)
    {
        $req->validate([
            'dname' => 'required|max:50',
            'dnum' => 'required|numeric',
            'dmail' => 'required|email',
            'd_sp' => 'required',
            'dimg' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        $img = $req->dimg;
        $imgname = $img->getClientOriginalName();
        $imgname = "doctorimg/" . Str::random(2) . "__" . $imgname;
        $img->move("doctorimg/", $imgname);

        DB::insert(
            'insert into doctor (dname,d_Specialization,dgander,d_pic,dpnumber,demail,hid,dstatus)
             values(?,?,?,?,?,?,?,?)',
            [$req->dname, $req->d_sp, $req->dgander, $imgname, $req->dnum, $req->dmail, $req->hid, $req->d_st]
        );

        return redirect('/dashboard/doctor');

    }
    function editdoctor($id)
    { 
        $result = Db::select('select *from doctor where did=?', [$id]);
        $hospital=DB::select('select* from hospital');
        if($result){
              return view('dashboard.doctor.edit',
               compact('result','hospital'));

        }else{
            return view('dashboard.doctor');
        }
      
    }
    function updatedoctor(Request $req, $id)
    { $req->validate([
            'dname' => 'required|max:50',
            'dnum' => 'required|numeric',
            'dmail' => 'required|email',
            'd_sp' => 'required',

        ]);
        $result = Db::select('select *from doctor where did=?', [$id]);
        if ($result) {
            if ($req->dimg) {

                $img = $req->dimg;
                $imgname = $img->getClientOriginalName();
                $imgname = "doctorimg/" . Str::random(2) . "__" . $imgname;
                $img->move("doctorimg/", $imgname);
                 
            }
            else {
                $imgname = $req->oldimg;
            }


            $name = $req['dname'];
            $sp = $req['d_sp'];
            $dgander = $req['dgander'];
            $dnum = $req['dnum'];
            $dmail = $req['dmail'];
            $hid = $req['hid'];
            $dst = $req['d_st'];
DB::UPDATE("UPDATE `doctor` SET `dname`='$name',`d_Specialization`='$sp',
`dgander`='$dgander',`d_pic`='$imgname',`dpnumber`='$dnum'
,`demail`='$dmail',`hid`='$hid',`dstatus`='$dst' where did = $id");
}

            return redirect('/dashboard/doctor');
        return redirect('/dashboard/doctor');
    }
    function deletedoctor($id)
    {
        $result = Db::select('select * from doctor where did=?', [$id]);
        if ($result) {
            Db::delete('delete from doctor where did=?', [$id]);
            return redirect('/dashboard/doctor');
        }
        return redirect('/dashboard/doctor');
    }
}
