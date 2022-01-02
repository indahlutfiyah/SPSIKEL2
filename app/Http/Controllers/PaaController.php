<?php

namespace App\Http\Controllers;

use App\Models\paa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaaController extends Controller
{
    public function index() {
        $paas = paa::all();
        return view('paa',['paa' => $paas], compact('paa'));
    }

    public function create(Request $request){
 
        //insert ke table user
        paa::create([
            'NIP_PAA' => request('NIP_PAA'),
            'NAMA_PAA' => request('NAMA'),
            'ALAMAT_PAA' => request('ALAMAT'),
            'TELP_PAA' => request('TLP'), 
            'JK_PAA' => request('JK'), 
            'USERNAME' => request('USERNAME'), 
            'password'=>bcrypt($request->password),
            
       ]);
      
      return redirect ('/users')->with('sukses','Data Berhasil Diinput');
    }
}
