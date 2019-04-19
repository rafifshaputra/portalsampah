<?php

namespace App\Http\Controllers;

use App\Models\nasabah;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

use Charts;



class nasabahController extends Controller
{
    public function tambahNasabah(Request $request){
        $input=$request->all();
            DB::table('nasabahs')->insert([
                'nama'=>$input['nama'],
                'kontak'=>$input['kontak'],
                'pekerjaan'=>$input['pekerjaan'],
                'usia'=>$input['usia'],
                'domisili'=>$input['domisili'],
                'kecamatan'=>$input['kecamatan'],
                'kelurahan'=>$input['kelurahan'],
                'kodePos'=>$input['kodePos'],
                'membantu'=>$input['membantu'],
                'menggunakan'=>$input['menggunakan'],
                'tanggapanBox'=>$input['tanggapanBox'],
            ]);
        return redirect('/')->with('status','Berhasil');
    }

    public function tampilGrafik(){
        $setuju = DB::table('nasabahs')->where('menggunakan','Ya')->get();
        $tidaksetuju = DB::table('nasabahs')->where('menggunakan','Tidak')->get();

        $chart2 = Charts::database(nasabah::all(), 'pie', 'highcharts')
            ->Title("Demografi Pekerjaan Responden")
            ->elementLabel("Total")
            ->dimensions(550, 350)
            ->responsive(false)
            ->groupBy('pekerjaan');

            $chart = Charts::database(nasabah::all(), 'pie', 'highcharts')
            ->Title("Demografi Usia Responden")
            ->elementLabel("Total")
            ->dimensions(550, 350)
            ->responsive(false)
            ->groupBy('usia');

            $chart3 = Charts::database(nasabah::all(), 'bar', 'highcharts')
            ->Title("Demografi Domisili Responden")
            ->elementLabel("Total")
            ->dimensions( 350, 350)
            ->responsive(false)
            ->groupBy('domisili');

            $chart4 = Charts::database(nasabah::all(), 'bar', 'highcharts')
            ->Title("Pendapat PortalSampah Membantu")
            ->elementLabel("Total")
            ->dimensions( 450, 350)
            ->responsive(false)
            ->groupBy('membantu');

            $chart5 = Charts::database(nasabah::all(), 'bar', 'highcharts')
            ->Title("Pendapat Akan Menggunakan PortalSampah")
            ->elementLabel("Total")
            ->dimensions( 350, 350)
            ->responsive(false)
            ->groupBy('menggunakan');

        $totalResponden = DB::table('nasabahs')->count();

        return view('dashboard', ['tidaksetuju'=>count($tidaksetuju),'setuju'=>count($setuju),'chart5'=>$chart5,'chart'=>$chart, 'chart2'=>$chart2, 'chart4'=>$chart4,'chart3'=>$chart3,'totalResponden'=>$totalResponden]);
    }
}
