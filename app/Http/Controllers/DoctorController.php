<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function store(Request $request)
    {
        $page =new Doctor();
        $page->doc_name = $request->input('dr_name');
        $page->neuro = $request->input('dr_desig');
        $page->time = $request->input('time');
        $page->fee = $request->input('fee');
        $page->p_name = $request->input('pat_name');
        $page->p_email = $request->input('pat_email');

        $page->save();
//        return 'yes';
        return redirect('doctor');

    }
}
