<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class patientController extends Controller
{
    function patients()
    {
        $data = DB::select('select * from patient');

        return view('dashboard.patient.index', compact('data'));
    }
    function addpatient()
    {
        return view('dashboard.patient.insert');
    }
    function storepatient(Request $req)
    {
        $req->validate([
            'pname' => 'required|max:50',
            'pdob' => 'required|',
            'pgander' => 'required',
            'pno' => 'required|numeric',
            'pstatus' => 'required',
            'ppic' => 'required|image|mimes:png,jpg,jpeg',
            'pmail' => 'required|email',
            'paddress' => 'required'
        ]);
        $img = $req->ppic;
        $imgname = $img->getClientOriginalName();
        $imgname = "patientimg/" . Str::random(2) . "__" . $imgname;
        $img->move("patientimg/", $imgname);

        DB::insert(
            'insert into patient ( pname, pdob, pgander, paddress, ppnumber, pemail, p_pic, pstatus) values(?,?,?,?,?,?,?,?)',
            [$req->pname, $req->pdob, $req->pgander, $req->paddress, $req->pno,
             $req->pmail,$imgname , $req->pstatus]
        );

        return redirect('/dashboard/patient');

    }
    function editpatient($id)
    {
        $result = Db::select('select *from patient where pid=?', [$id]);
        return view('dashboard.patient.edit', compact('result'));

    }
    function updatepatient(Request $req, $id)
    { $req->validate([
        'pname' => 'required|max:50',
        'pdob' => 'required|',
        'pgander' => 'required',
        'pno' => 'required|numeric',
        'pstatus' => 'required',
        'pmail' => 'required|email',
        'paddress' => 'required',

        ]);
        $result = Db::select('select *from patient where pid=?', [$id]);
        if ($result) {
            if ($req->ppic) {

                $img = $req->ppic;
                $imgname = $img->getClientOriginalName();
                $imgname = "patientimg/" . Str::random(2) . "__" . $imgname;
                $img->move("patientimg/", $imgname);
                 
            }
            else {
                $imgname = $req->oldimg;
            }


            $name = $req['pname'];
            $pdob = $req['pdob'];
            $gander = $req['pgander'];
            $address = $req['paddress'];
            $no = $req['pno'];
            $status = $req['pstatus'];
            $mail = $req['pmail'];
           
// DB::update("UPDATE `patient` SET `pname`='$name',`pdob`='$pdob',
// `pgander`='$gander',`paddress`='$address',`ppnumber`='$no'
// ,`pemail`='$mail',$imgname,`pstatus`='$status' where pid = $id");

DB::update("UPDATE `patient` SET`pname`='[$name]',`pdob`='[$pdob]',
`pgander`='[$gander]',`paddress`='[$address]',`ppnumber`='[$no]',
`pemail`='[$mail]',`p_pic`='[$imgname]',`pstatus`='[$status]' WHERE pid=$id");

}

            return redirect('/dashboard/patient');
        return redirect('/dashboard/patient');
    }
    function deletepatient($id)
    {
        $result = Db::select('select * from patient where pid=?', [$id]);
        if ($result) {
            Db::delete('delete  from patient where pid=?', [$id]);
            return redirect('/dashboard/patient');
        }
        return redirect('/dashboard/patient');
    }
}
