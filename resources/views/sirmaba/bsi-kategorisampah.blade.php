<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sirmaba</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{% static 'css/style.css' %}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Roboto">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{% static 'js/script.js' %}"></script>
  </head>
  <body>
    <div class="overlay position-fixed"></div>

    <div class="sidebar position-absolute" id="sidebar">
      <div class="sidebar-header pb-4 pl-5">
          <button class="btn btn-link float-right py-2 px-3">
            <i class="fa fa-times fa-2x"></i>
          </button>

          <div class="pt-5">
            <div class="row">
              <h2 class="roboto green-text font-weight-bold">Bank Sampah Rumah Harum</h2>
            </div>
            <small class="row" style="opacity: 0.5">Bank Sampah Induk |
              <a href="" class="danger-text">Log out</a></small>
          </div>
      </div>

      <div class="sidebar-menu pt-4 pl-5" style="opacity: 0.7">
        <a href="" class="row py-2">
          <img src="{% static 'icons/laporan.png' %}" class="sidebar-icon mr-3">
          <p class="font-weight-bold">Laporan</p>
        </a>

        <a href="{% url 'bsi_jemput' %}" class="row py-2">
          <img src="{% static 'icons/jemput.png' %}" class="sidebar-icon mr-3">
          <p class="font-weight-bold">Penjemputan Sampah</p>
        </a>

        <a href="" class="row py-2">
          <img src="{% static 'icons/daftar.png' %}" class="sidebar-icon mr-3">
          <p class="font-weight-bold">Daftar Bank Sampah Unit</p>
        </a>

        <a href="" class="row py-2">
          <img src="{% static 'icons/setor.png' %}" class="sidebar-icon mr-3">
          <p class="font-weight-bold">Bantuan</p>
        </a>
      </div>
    </div>

    <nav class="navbar py-auto navbar-expand-lg fixed-top" role="navigation">
      <a class="navbar-brand mx-auto poppins green-text font-weight-bold" href="">SIRMABA</h4></a>
      <button class="navbar-toggler navbar-toggler-left py-auto position-absolute" type="button">
        <i class="fa fa-bars green-text"></i>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <a href="" class="row mr-1 py-auto">
          <img src="{% static 'icons/laporan.png' %}" class="ml-5 mr-2 my-auto">
          <p class="my-auto font-weight-bold">Laporan</p>
        </a>

        <a href="{% url 'bsi_jemput' %}" class="row mr-1">
          <img src="{% static 'icons/jemput.png' %}" class="ml-5 mr-2 my-auto">
          <p class="my-auto font-weight-bold">Penjemputan Sampah</p>
        </a>

        <a href="" class="row mr-1">
          <img src="{% static 'icons/daftar.png' %}" class="ml-5 mr-2 my-auto">
          <p class="my-auto font-weight-bold">Daftar Bank Sampah Unit</p>
        </a>

        <a href="" class="row mr-1">
          <img src="{% static 'icons/setor.png' %}" class="ml-5 mr-2 my-auto">
          <p class="my-auto font-weight-bold">Bantuan</p>
        </a>
      </div>
    </nav>

    {% block content %}
    {% endblock %}
  </body>
</html>
