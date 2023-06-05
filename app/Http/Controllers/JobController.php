<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function job(){
        return view('job', [
            "title" => "Job",
            "datajob" => JobModel::all()
        ]);
    }
}
