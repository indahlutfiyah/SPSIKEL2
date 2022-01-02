<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\datasidang;
use App\Models\dosen_penguji;
use Illuminate\Http\Request;

class DatasidangController extends Controller
{
    public function index(){
        //ambil data dari table kelurahan
        $datasidang = DB::table('datasidang')->where('DELETED_AT',null)->Paginate(4);

        // mengirim data ke view kelurahan
        return view('datasidang', [
            'data' => $datasidang
        ]);
}

    public function printdatasidang(){
    //ambil data dari table kelurahan
    $datasidang = DB::table('datasidang')->where('DELETED_AT',null)->get();

    // mengirim data ke view kelurahan
    return view('printdatasidang', [
        'data' => $datasidang
    ]);        
}
    public function tambah(){
    $dosen_pengujis = dosen_penguji::all();
    return view('createdatasidang', compact('dosen_pengujis'));
}

public function store(Request $request){
    $datasidang = new datasidang; 
    $datasidang->ID_SIDANG = $request->id_sid;
    $datasidang->NIP_DOSENPENGUJI = $request->id_nip;
    $datasidang->JENIS_SIDANG = $request->jensid;
    $datasidang->RUANG_SIDANG = $request->ruang;
    $datasidang->TANGGAL_SIDANG = $request->tgl;
    $datasidang->WAKTU_SIDANG = $request->waktu;

    if($datasidang->save()){
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href='/datasidang'
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href='/createdatasidang'
        </script>
        ";
    }


}

// method untuk edit data siswa
public function edit($id){ 
    // mengambil data siswa berdasarkan id yang dipilih
    $datasidang = DB::table('datasidang')->where('ID_SIDANG',$id)->get(); 
    
    // passing data siswa yang didapat ke view edit.blade.php 
    return view('editdatasidang',['datasidang' => $datasidang]);
    }

    public function update(Request $request){
        // update data siswa
        DB::table('datasidang')->where('ID_SIDANG',$request->id)->update([
        
            'NIP_DOSENPENGUJI' => $request->id_nip,
            'JENIS_SIDANG' => $request->jensid,
            'RUANG_SIDANG' => $request->ruang,
            'TANGGAL_SIDANG' => $request->tgl,
            'WAKTU_SIDANG' => $request->waktu,

        ]);
    
        // alihkan halaman ke halaman siswa
        return redirect('/datasidang')->with('status','Data Penjadwalan berhasil di update!');
}

public function cari(Request $request)
{
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table pegawai sesuai pencarian data
	$datasidang = DB::table('datasidang')
	->where('NIP_DOSENPENGUJI','like',"%".$cari."%")
	->paginate();

    	// mengirim data pegawai ke view index
	return view('datasidang',['data' => $datasidang]);

}
}