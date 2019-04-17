<?php

namespace App\Http\Controllers;

use App\Models\nasabah;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class nasabahController extends Controller
{
    public function tambahNasabah(Request $request){
        $input=$request->all();
            DB::table('nasabahs')->insert([
                'nama'=>$input['nama'],
                'email'=>$input['alamatEmail'],
                'alamatRumah'=>$input['alamatRumah'],
                'tanggapanBox'=>$input['tanggapanBox'],
            ]);
        return redirect('/#interest')->with('status','Berhasil');
    }
}
