<?php

namespace App\Http\Controllers;
use App\Models\JobModel;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


class DashboardClientController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('client.job.index', [
            'job' => JobModel::all()
        ]);
    }
}
