<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\laporanpkl;
use Illuminate\Http\Request;

class LaporanpklController extends Controller
{
    public function index(){
        //ambil data dari table kelurahan
        $laporanpkl = DB::table('laporanpkl')->where('DELETED_AT',null)->Paginate(4);

        // mengirim data ke view kelurahan
        return view('laporanpkl', [
            'data' => $laporanpkl
        ]);
}

public function tambah(){
    return view('createlaporan');
}

public function store(Request $request){

    // return $request->file('file')->store('post-file');
    // ddd($request);
    $nm = $request->formFile;
    $namafile = $nm->getClientOriginalName();
    $laporanpkl = new laporanpkl; 
    $laporanpkl->ID_LAPORAN = $request->id_lap;
    $laporanpkl->NIM = $request->nim;
    $laporanpkl->KATEGORI_LAPORAN = $request->kategori;
    $laporanpkl->JUDUL_LAPORAN = $namafile;
    $laporanpkl->WAKTU_UPLOAD = $request->waktu;
    $laporanpkl->STATUS = $request->status;
    // return $request->file('file')->store('post-file');
    $nm->move(public_path().'/storage/post-file', $namafile);
  
    if($laporanpkl->save()){
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href='/laporanpkl'
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href='/laporanpkl'
        </script>
        ";
    }

    // dd($request->all());
    
}

// method untuk edit data siswa
public function edit($id){ 
    // mengambil data siswa berdasarkan id yang dipilih
    $laporanpkl = DB::table('laporanpkl')->where('ID_LAPORAN',$id)->get(); 
    
    // passing data siswa yang didapat ke view edit.blade.php 
    return view('editlaporan',['laporanpkl' => $laporanpkl]);
    }

    public function update(Request $request){
        // update data siswa
        DB::table('laporanpkl')->where('ID_LAPORAN',$request->id)->update([
        
            'NIM' => $request->nim,
            'KATEGORI_LAPORAN' => $request->kategori,
            'JUDUL_LAPORAN' => $request->judul,
            'WAKTU_UPLOAD' => $request->waktu,
            'STATUS' => $request->status,

        ]);
    
        // alihkan halaman ke halaman siswa
        return redirect('/laporanpkl')->with('status','Data laporanpkl berhasil di update!');
}
}


