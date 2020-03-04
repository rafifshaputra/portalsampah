@extends('layouts.homeMaster')
@section('title','Home')

<head>
    <link rel="stylesheet" href="css/home.css">

  <style>

  </style>
</head>

@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="column" >
        <div class="card">
          <h5> Total Responden </h5>
          <h2>{{$totalResponden}}</h2>
        </div>
    </div>

    <div class="column" >
            <div class="card">
                <h5> Jumlah Menggunakan PortalSampah</h5>
                <div style="font-size:16px;">
                    <p>Setuju Menggunakan : {{$setuju}}</p>
                    <p>Tidak  Menggunakan : {{$tidaksetuju}}</p>
                </div>
            </div>
        </div>



    <div class="column2" style=" border-style: solid;border-width: 2px;">
            {!! Charts::assets() !!}
            {!! $chart2->render() !!}
    </div>


    <div class="column2" style=" border-style: solid;border-width: 2px;">


            {!! Charts::assets() !!}
            {!! $chart->render() !!}

    </div>


    <!--<div class="column3" style=" border-style: solid;border-width: 2px;">
            <center>

            {!! Charts::assets() !!}
            {!! $chart3->render() !!}
            </center>
    </div>
-->
    <div class="column3" style=" border-style: solid;border-width: 2px;">
            {!! Charts::assets() !!}
            {!! $chart3->render() !!}
    </div>


    <div class="column3" style=" border-style: solid;border-width: 2px;">


            {!! Charts::assets() !!}
            {!! $chart4->render() !!}

    </div>


  <br>






</div>

@endsection
