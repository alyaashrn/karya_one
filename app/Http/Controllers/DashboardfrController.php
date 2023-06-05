<?php

namespace App\Http\Controllers;
use App\Models\freelancer;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class DashboardfrController extends Controller
{
    public function index(){
        return view('freelancer.dashboardfr');
    }
}
