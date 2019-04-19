<!DOCTYPE html>
<html>
<head>
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="icon" href="raicon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="/css/homeMaster.css">
    <style>
    @media only screen and (max-width: 600px) {
        hr{margin-top:75px;}

        body{
        font-family:'Montserrat';
    }
    .page-wrap{
        width:960px;
        margin:0 auto;
        position:relative
    }
    }
    </style>
</head>
<body>
    <div class="sidenav" align="center" style = "color : white;">
            <a href="#"><img src="img/akuadmin.png" style="widht:100px;height:100px;" alt="ra-logo1" border="0"></a>
            <span> Halo Admin ! </span>
            <br><br>
            <br>
            <br>
            <div>
                <a href="/dashboard"><img src="img/summary.png" alt="dashboard" border="0" style="width:35px;height:35px;"></a>
                <a href="/dashboard-27419">Summary</a>
            </div><br>
            <div >
                <a href="#"><img src="img/responden.png" alt="image" border="0" style="width:35px;height:35px;"></a>
                <a href="#">List Responden</a>
            </div><br>
            <div>
                <a href="#"><img src="img/bs.png" alt="ra-logo1-1" border="0" style="width:35px;height:35px;"></a>
                <a href="#">Daftar Bank Sampah</a>
            </div><br>

    </div>

    <header>

        <nav  class ="shadow-sm p-3 mb-5 bg-white rounded">
            <a href="/dashboard-27419"><span style="font-size:28px;color:#2A2E43;">Dashboard</span></a>
            <div class="right-nav" style=" align:120px;float:right;font-size:15px;padding-top:2px;">
                <div class=right-content >
                    <div style="padding-right:10px;float:left;">
                    <a href="/" class="btn btn-default btn-sm" style="background-color:#EA4764;color:white;font-size:15px;border-radius: 25px;width:150px;" >
                        Landing Page
                    </a>
                   </div>

                </div>
            </div>
        </nav>
    </header>


    <div class="main">
        @yield('content')
    </div>

    <br>
    <footer class="foot">
        <p align="center">
            &copy; Developed by Portal Sampah Developer Team
        </p>
    </footer>


</body>
</html>
