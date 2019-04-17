<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>PortalSampah</title>

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
<style>
#container-form{
    padding-top:20px;
}
</style>
</head>

<body>
    <nav  class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" style="font-size:24px;color:#03746a;font-family:'Montserrat';" href="/"><img src="img/trash.png" style="width:50px;height:50px;"/> PortalSampah</a>
            <div style="font-size:18px;color:#03746a;font-family:'Montserrat';"class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarNav">
            </div>

            </div>
        </nav>
    <div class="container" id="container-form">
        @if(session('status')=="Berhasil")
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> data berhasil ditambahkan ke dalam sistem.
        </div>
        @endif
        <form action="/" method="post">
            {{ csrf_field() }}
                <fieldset>
                  <div class="form-group row">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nama" required>
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="alamatEmail" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">*Kami tidak akan menyebar alamat email, hanya digunakan untuk validasi data</small>

                    </div>
                    <div class="jumbotron" style="background-color: RGBA(0,0,0,.20);">
                        <label for="exampleInputEmail1"><b>Alamat Rumah</b></label>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Kelurahan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="kelurahan" required>

                        <label for="exampleInputEmail1">Kecamatan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="kecamatan" required>
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1">Kode Pos</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="kodePos" required>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">*Alamat ini digunakan untuk diberikan informasi Bank Sampah terdekat atau untuk estimasi pengajuan pembukaan Bank Sampah baru didaerah tersebut</small>
                    </div>

                  <div class="form-group">
                    <label for="exampleTextarea">Tanggapan/Saran</label>
                    <textarea class="form-control" id="exampleTextarea" name="tanggapanBox" rows="5"></textarea>
                  </div>
                  <small id="emailHelp" class="form-text text-muted">*Tanggapan terkait aplikasi yang dikembangkan atau ajukan pembukaan Bank Sampah</small>
                  </fieldset>

                  <br>
                  <button style="border-color:#03746a;background-color:#03746a;" type="submit" class="btn btn-primary" >Submit</button>

                </fieldset>
              </form>


            </div>
            <br>
            <!-- Footer -->
  <footer class="footer bg-light" style="color:#03746a;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
              <ul class="list-inline mb-2">
                <li class="list-inline-item">
                  <a style="color:#03746a;" href="#">About</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                  <a style="color:#03746a;" href="#">Contact</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                  <a style="color:#03746a;"href="#">Terms of Use</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                  <a style="color:#03746a;"href="#">Privacy Policy</a>
                </li>
              </ul>
              <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
              <ul class="list-inline mb-0">
                <li class="list-inline-item mr-3">
                  <a href="#">
                    <i style="color:#03746a;" class="fab fa-facebook fa-2x fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item mr-3">
                  <a href="#">
                    <i style="color:#03746a;" class="fab fa-twitter-square fa-2x fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i style="color:#03746a;"class="fab fa-instagram fa-2x fa-fw"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
