<?php

namespace App\Http\Controllers;
use App\Models\ClientModel;
use Illuminate\Http\Request;

class RegisterClientController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password'=>'required', 
            'aksesrol'=>'required',
        ]);
        if($request->aksesrol==1){
            ClientModel::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password'=> bcrypt($request->password),
                'noHP'=> $request->noHP,
                'aksesrol'=> $request->aksesrol,
                'industri'=>$request->industri
            ]);
        }
        if($request->aksesrol==2){
            ClientModel::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password'=> bcrypt($request->password),
                'aksesrol'=> $request->aksesrol,
                'ttl'=>$request->ttl
            ]);
        }
        return redirect('/login')->with('success','succes registerd');
    }
}
