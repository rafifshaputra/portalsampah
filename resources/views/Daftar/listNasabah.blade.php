<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>PortalSampah</title>

  <link rel="stylesheet" href="css/daftarNasabah.css">
  <!-- Bootstrap core CSS -->
  <link href="/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/css/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="path-link"syle="font-size:32px;">
            <span>  <a href="/"style="color:2A2E43;" > Beranda </a>></span>
            <span style="color:00A6A0;"> Daftar Responden </span>

        </div>
        <div style="padding-top:80px;">
            <span><img class="img-akun"src="https://i.ibb.co/yq1ZRf5/employee.png" alt="employee" border="0" /></span>
        </div>
        <div class="info-content">
            <span class="tambah_akun">
                <button  class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"style="background-color:#00A6A0;color:white;font-size:15px;border-radius:25px;width:150px;height:35px"> Tambah Akun</button>
             </span>
            <span style="font-size:28px;"><b> Daftar Akun </b></span><br>
        </div>

    <br>
    <br>
        <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nasabah as $n)
                <tr>
                        <td class="count"></td>
                    <td class="count"></td>
                    <td class="text-left"><a href="/dashboard-27419/{{ $n->nama }}" style="color:#2A2E43;">{{ $n->nama }} </a></td>
                    <td >{{ $n->kontak }}</td>

                    <td >{{ $n->pekerjaan}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        <script>
            $(document).ready( function () {
            $('#example').DataTable();
        } );
        </script>

</body>
</html>



