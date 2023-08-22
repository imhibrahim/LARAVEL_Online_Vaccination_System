<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
class PatientreportController extends Controller
{
    function patientreport()
    {
        //$data = DB::select('select * from  covid_tests inner join covidtest on covid_tests.appointment_id=appointments.appointment_id');
        $data = DB::select('select * from  patient_report');

        return view('dashboard.patientreport.index', compact('data'));
    }

    function deletepatientreport($id)
    {
        $result = Db::select('select * from patient_report where test_id =?', [$id]);
        if ($result) {
            Db::delete('delete from patient_report where test_id =?', [$id]);
            return redirect('/dashboard/patient reportx');
        }
        return redirect('/dashboard/patient reportx');
    }
}
