<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class AppointmentController extends Controller
{
    function appointmentlist()
    {
        $data3 = DB::select('select * from appointments');
        // $data = DB::select('select * from appointments inner join hospital on
        //  appointments.h_id = hospital.hid;select * from appointments inner join vaccine on
        //  appointments.vaccine_name = vaccine.v_id'
        // );

        // $hospitals=DB::table('hospital')->join('hospital','appointments.hid',
        // '=','hospital.h_id');
        return view('dashboard.appointment.index', compact('data3' 
        ));
    }
    function addappointment()
    {
       $data1=DB::select('select * from vaccine');
       $data2=DB::select('select * from hospital');
        return view('website.appointment',compact('data1','data2'));
    }

    function storeappointment(Request $req){
        $req->validate([
'pname'=>'required',
'appdate'=>'required',
'number'=>'required',
'diseas'=>'required',
'ppic'=>'required|image|mimes:png,jpg,jpeg',
'address'=>'required',
'mail'=>'required'

        ]);



        $img=$req->ppic;
        $imgname=$img->getClientoriginalName();
        $imgname="patientimg/". Str::random(2) ."__".$imgname;
        $img->move("patientimg/",$imgname);
        
    
  

         DB::insert('INSERT INTO `appointments`( `vaccine_name`, `patient_name`, `pemail`, `p_address`,
          `p_phonenumber`, `p_pic`, `h_id`, `diseas`, `appointment_date`, `appointment_status`) 
          VALUES (?,?,?,?,?,?,?,?,?,?)'
           ,[$req->vname,$req->pname,$req->mail,$req->address
           ,$req->number,$imgname,$req->hid,$req->diseas
           ,$req->appdate,0]);

           return view('website.appointmentdetailes',compact('req'));

    }
   
    
   
    
    function deleteappointment($id)
    {
        $result = Db::select('select * from  appointments where appointment_id =?', [$id]);
        if ($result) {
            Db::delete('delete from  appointments where appointment_id =?', [$id]);
            return redirect('/dashboard/appointmentlist');
        }
        return redirect('/dashboard/appointment');
    }
}
