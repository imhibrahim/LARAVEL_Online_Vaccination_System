<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class Covid_testController extends Controller
{
    
    function patienttest()
    {
        //$data = DB::select('select * from  covid_tests inner join covidtest on covid_tests.appointment_id=appointments.appointment_id');
        $data = DB::select('select * from  patient_tests');

        return view('dashboard.covidtest.index', compact('data'));
    }

    function deletepatienttest($id)
    {
        $result = Db::select('select * from patient_tests where test_id =?', [$id]);
        if ($result) {
            Db::delete('delete from patient_tests where test_id =?', [$id]);
            return redirect('/dashboard/patient test');
        }
        return redirect('/dashboard/patient test');
    }
}
