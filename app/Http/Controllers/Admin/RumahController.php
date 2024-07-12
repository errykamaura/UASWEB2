<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternative;
use App\Models\Comparisons;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilform()
    {
        $data_crtlt = SubCriteria::select('nilaik')->where('name','Fasilitas')->get();
        $data_crtkm = SubCriteria::select('nilaik')->where('name','Lokasi')->get();
        // $data_crtsz = SubCriteria::select('nilaik')->where('name','Luas')->get();
        // $data_crtpr = SubCriteria::select('nilaik')->where('name','Harga')->get();
        $data_crtgr = SubCriteria::select('nilaik')->where('name','Jarak')->get();
        return view('admin/package/rumah/create', [
            'data_crtlt' => $data_crtlt,
            'data_crtkm' => $data_crtkm,
            // 'data_crtsz' => $data_crtsz,
            // 'data_crtpr' => $data_crtpr,
            'data_crtgr' => $data_crtgr
        ]);
    }

    public function index()
    {
        // mengambil data dari table daftar rumah
        $data_rumah = Alternative::all();

        // mengirim data rumah ke view daftar rumah
        return view('admin/package/rumah/index', [
            'data_rumah' => $data_rumah
        ]);
    }

    public function tampileditrumah($id)
    {
        $data_crtlt = SubCriteria::select('nilaik')->where('name','Fasilitas')->get();
        $data_crtkm = SubCriteria::select('nilaik')->where('name','Lokasi')->get();
        // $data_crtsz = SubCriteria::select('nilaik')->where('name','Luas')->get();
        // $data_crtpr = SubCriteria::select('nilaik')->where('name','Harga')->get();
        $data_crtgr = SubCriteria::select('nilaik')->where('name','Jarak')->get();
        $data_rumah = DB::table('alternatives')->where('id', $id)->get();
        return view('admin/package/rumah/update', [
            'data_rumah' => $data_rumah,
            'data_crtlt' => $data_crtlt,
            'data_crtkm' => $data_crtkm,
            // 'data_crtsz' => $data_crtsz,
            // 'data_crtpr' => $data_crtpr,
            'data_crtgr' => $data_crtgr
        ]);
    }

    // public function postrumah(Request $request)
    // {
    //     $this->validate($request, [
    //         'nama' => 'required',
    //         'cbfasilitas' => 'required',
    //         'cblokasi' => 'required',
    //         'luas' => 'required',
    //         'harga' => 'required',
    //         'cbjarak_tempat_kerja' => 'required',
    //     ]);

    //     if ($request->hasFile('gambar')) {
    //         // $file = $request->file('gambar');
    //         // $filedenah = $request->file('gambar_denah');
    //         // $nama_file = time() . "_" . $file->getClientOriginalName();
    //         // $nama_filedenah = time() . "_" . $filedenah->getClientOriginalName();
    //         Alternative::create([
    //             'nama' => $request->nama,
    //             'fasilitas' => $request->cbfasilitas,
    //             'lokasi' => $request->cblokasi,
    //             'luas' => $request->luas,
    //             'harga' => $request->harga,
    //             'jarak_tempat_kerja' => $request->cbjarak_tempat_kerja,
    //             'keterangan' => $request->keterangan,
    //             // 'gambar' => $nama_file,
    //             // 'gambar_denah' => $nama_filedenah
    //             // 'gambar' => $request->gambar->move($tujuan_upload, $request->gambar->getClientOriginalName())
    //         ]);
    //         $tujuan_upload = 'data_file';
    //         $file->move($tujuan_upload, $nama_file);
    //         $filedenah->move($tujuan_upload, $nama_filedenah);

    //         if($request->luas <= 150){
    //             $luasc = 1;
    //         }else if($request->luas >= 200 && $request->luas <= 249){
    //             $luasc = 2;
    //         }else if($request->luas >= 250){
    //             $luasc = 3;
    //         }else{
    //             $luasc = 1;
    //         }

    //         if($request->harga <= 1000000000){
    //             $hargac = 1;
    //         }else if($request->harga >= 1500000000 && $request->harga <= 1999999999){
    //             $hargac = 2;
    //         }else if($request->harga >= 2000000000){
    //             $hargac = 3;
    //         }else{
    //             $hargac = 1;
    //         }

    //         if($request->cbjarak_tempat_kerja == "Kurang dari 5 KM"){
    //             $cbjarak_tempat_kerjac = 1;
    //         }else if($request->cbjarak_tempat_kerja == "5 KM"){
    //             $cbjarak_tempat_kerjac = 2;
    //         }else{
    //             $cbjarak_tempat_kerjac = 3;
    //         }


    //         Comparisons::create([
    //             'nama' => $request->nama,
    //             'fasilitas' => $request->cbfasilitas,
    //             'lokasi' => $request->cblokasi,
    //             'luas' => $luasc,
    //             'harga' => $hargac,
    //             'jarak_tempat_kerja' => $cbjarak_tempat_kerjac
    //         ]);

    //         return redirect('/admin/rumah');
    //     } else {
    //         // do nothing
    //     }
    //     // dd($request->all());
    // }


    public function postrumah(Request $request)
{
    $this->validate($request, [
        'nama' => 'required',
        'cbfasilitas' => 'required',
        'cblokasi' => 'required',
        'luas' => 'required',
        'harga' => 'required',
        'cbjarak_tempat_kerja' => 'required',
    ]);

    Alternative::create([
        'nama' => $request->nama,
        'fasilitas' => $request->cbfasilitas,
        'lokasi' => $request->cblokasi,
        'luas' => $request->luas,
        'harga' => $request->harga,
        'jarak_tempat_kerja' => $request->cbjarak_tempat_kerja,
    ]);

    if ($request->luas <= 150) {
        $luasc = 1;
    } else if ($request->luas >= 200 && $request->luas <= 249) {
        $luasc = 2;
    } else if ($request->luas >= 250) {
        $luasc = 3;
    } else {
        $luasc = 1;
    }

    if ($request->harga <= 1000000000) {
        $hargac = 1;
    } else if ($request->harga >= 1500000000 && $request->harga <= 1999999999) {
        $hargac = 2;
    } else if ($request->harga >= 2000000000) {
        $hargac = 3;
    } else {
        $hargac = 1;
    }

    // if ($request->cbjarak_tempat_kerja == "Lebih dari 5 KM") {
    //     $cbjarak_tempat_kerjac = 1;
    // } else if ($request->cbjarak_tempat_kerja == "5 KM") {
    //     $cbjarak_tempat_kerjac = 2;
    // } else {
    //     $cbjarak_tempat_kerjac = 3;
    // }

    Comparisons::create([
        'nama' => $request->nama,
        'fasilitas' => $request->cbfasilitas,
        'lokasi' => $request->cblokasi,
        'luas' => $luasc,
        'harga' => $hargac,
        'jarak_tempat_kerja' => $request->cbjarak_tempat_kerja
    ]);

    return redirect('/admin/rumah');
}

public function updaterumah(Request $request)
{
    // Validasi input
    $request->validate([
        'cbfasilitas' => 'required|numeric',
        'cblokasi' => 'required|numeric',
        'luas' => 'required|numeric',
        'harga' => 'required|numeric',
        'cbjarak_tempat_kerja' => 'required', // Pastikan sudah sesuai dengan tipe data yang diharapkan
    ]);

    // Mengatur nilai luas berdasarkan kondisi
    if ($request->luas <= 150) {
        $luasc = 1;
    } else if ($request->luas >= 200 && $request->luas <= 249) {
        $luasc = 2;
    } else if ($request->luas >= 250) {
        $luasc = 3;
    } else {
        $luasc = 1;
    }

    // Mengatur nilai harga berdasarkan kondisi
    if ($request->harga <= 1000000000) {
        $hargac = 1;
    } else if ($request->harga >= 1500000000 && $request->harga <= 1999999999) {
        $hargac = 2;
    } else if ($request->harga >= 2000000000) {
        $hargac = 3;
    } else {
        $hargac = 1;
    }

    // Update data di tabel alternatives
    DB::table('alternatives')->where('nama', $request->nama)->update([
        'fasilitas' => $request->cbfasilitas,
        'lokasi' => $request->cblokasi,
        'luas' => $request->luas,
        'harga' => $request->harga,
        'jarak_tempat_kerja' => $request->cbjarak_tempat_kerja,
    ]);

    // Update data di tabel comparisons
    DB::table('comparisons')->where('nama', $request->nama)->update([
        'fasilitas' => $request->cbfasilitas,
        'lokasi' => $request->cblokasi,
        'luas' => $luasc,
        'harga' => $hargac,
        'jarak_tempat_kerja' => $request->cbjarak_tempat_kerja,
    ]);

    return redirect('/admin/rumah')->with('success', 'Data berhasil diperbarui.');
}


    public function delrumah($nama){
        // menghapus data rumah berdasarkan id yang dipilih
        DB::table('comparisons')->where('nama',$nama)->delete();
        DB::table('hasils')->where('nama',$nama)->delete();
        DB::table('alternatives')->where('nama',$nama)->delete();
        return redirect('/admin/rumah');
    }
}
