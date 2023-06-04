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
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('client.job.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaPekerjaan' => 'required|max:255',
            'kategori' => 'required',
            'gaji' => 'required|integer',
            'deskripsi' => 'required',
            'syarat' => 'required'
        ], [
            'namaPekerjaan' => 'Harap isi nama pekerjaan',
            'kategori' => 'Harap isi kategori',
            'gaji' => 'Harap isi gaji',
            'deskripsi' => 'Harap isi deskripsi',
            'syarat' => 'Harap isi syarat yang diperlukan'
        ]);
        JobModel::create([
            'namapekerjaan' => $request->namaPekerjaan,
            'kategori' => $request->kategori,
            'gaji' => $request->gaji,
            'deskripsi' => $request->deskripsi,
            'syarat' => $request->syarat
        ]);
        return redirect('/dashboardcl/job')->with('success', 'new dokter job been added!');
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
