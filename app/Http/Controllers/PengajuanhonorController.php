<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\pengajuanhonor;
use Illuminate\Http\Request;

class PengajuanhonorController extends Controller
{
    public function index(){
        //ambil data dari table kelurahan
        $pengajuanhonor = DB::table('pengajuanhonor')->where('DELETED_AT',null)->Paginate(4);

        // mengirim data ke view kelurahan
        return view('pengajuanhonor', [
            'data' => $pengajuanhonor
        ]);
}

public function tambah(){
    return view('createpengajuan');
}

public function store(Request $request){

    // return $request->file('file')->store('post-file');
    // ddd($request);
    $nm = $request->formFile;
    $namafile = $nm->getClientOriginalName();
    $pengajuanhonor = new pengajuanhonor; 
    $pengajuanhonor->ID_PENGAJUAN = $request->id_peng;
    $pengajuanhonor->SURAT_PENGAJUAN = $namafile;
    $pengajuanhonor->JENIS_PENGAJUAN = $request->jenis;
    $pengajuanhonor->STATUS = $request->status;
    // return $request->file('file')->store('post-file');
    $nm->move(public_path().'/storage/post-file', $namafile);
  
    if($pengajuanhonor->save()){
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href='/pengajuanhonor'
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href='/createpengajuan'
        </script>
        ";
    }

    // dd($request->all());
    
}

// public function cari(Request $request)
// {
//     // menangkap data pencarian
// 		$cari = $request->cari;
 
//         // mengambil data dari table kelurahan sesuai pencarian data
//     $pengajuanhonor = DB::table('pengajuanhonor')
//     ->where('pengajuanhonor','like',"%".$cari."%")
//     ->paginate();

//         // mengirim data kelurahan ke view index
//     return view('pengajuanhonor',['data' => $pengajuanhonor]);

// }

    
}
