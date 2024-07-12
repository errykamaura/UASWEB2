<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternative;
use App\Models\Comparisons;
use App\Models\Hasil;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilController extends Controller
{
    public function tampildetail($id)
    {
        $hasils = Hasil::where('id', $id)->get();
        return view('tampildetail', compact('hasils'));
        }
    }

//     public function tampilkesimpulan($nama)
//     {
//         // mengambil data dari table daftar rumah
//         $data_rumah = Hasil::where('nama', $nama)->get();

//         // mengirim data rumah ke view daftar rumah
//         return view('customer/package/rumah/kesimpulan', [
//             'data_rumah' => $data_rumah
//         ]);
//     }

//     public function cetakpdf($nama)
//     {
//         // set_time_limit(300);
//         $data_rumah = Hasil::where('nama', $nama)->get();
//         $pdf = \PDF::loadView('customer.package.rumah.cetak', compact('data_rumah'));
//         $pdf->download('cetak.pdf');
//         return view('customer/package/rumah/cetak', [
//             'data_rumah' => $data_rumah
//         ]);
//     }
// }
