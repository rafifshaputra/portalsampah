<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

 <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/rafifshaputra/image-gallery.slider/=edit -->
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $SlideDuration: 2000,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
<style>

    body {
        font-family: 'Poppins';
    }
    .column {
    float: left;
    width: 25%;
    padding: 5px;
    }

    /* Clear floats after image containers */
    .row::after {
    content: "";
    clear: both;
    display: table;
    }

    .rows {
    display: flex;
    }

    .column {
    flex: 25%;
    padding: 5px;
    }

    .contain{
        margin:0px 300px;
        padding:0px 15px;
    }

    button {
    background-color: #3A7765; /* Green */
    border: none;
    color: white;
    padding: 6px 15px;
    width:200px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    }

    span{
        padding:10px;
    }

    iframe{
        height:60%;
    }

    .mobile{
        display:none
    }

    .mobile2{
        display:none
    }

    @media screen and (max-width: 1000px) {
        .column {
            width: 100%;
        }
        .mobile{
            display:block;
        }

        .desktop{
            display:none;
        }

        .mobile2{
            display:none;
        }

        .contain{
            margin:0px 0px;
            padding:2px;
        }

        iframe{
            height:50%;
        }

        .column3{
            flex: 30%;
            padding: 5px;
            float: left;
            padding: 5px;
            width:33.33%
        }

        .column4{
            flex: 50%;
            padding: 5px;
            float: left;
            padding: 5px;
            width:60%;
        }

        ul.a {
            list-style-position: outside;
        }
        button{
            padding: 15px 15px;
            width:50%;
            font-size:32px;
        }
        button.but{
            padding: 15px 15px;
            width:100%;
            font-size:32px;
        }
    }

        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
</head>
<body style="background-color:#F3F6F5">
<div class="desktop">
    <nav class="navbar navbar-default" style="background-color:#3A7765;">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:white;font-size:20px;">TRAVELRAFIF</a>
        </div>

    </div>
    </nav>
    <div class="contain" style="padding-top:2%;background-color:white;">
        <div class="head" style="padding-left:3%;">
            <div style="font-size:24px"><b> Klapa Resort</b><img style="padding-left:1%;"src="https://imgur.com/jTq0RbZ.png" width="100px;"><br></div>
            <div style="padding-top:1%; font-size:18px;"> Jalan Uluwatu 123. Bekasi Utara. Jakarta. 17610 </div><br>
        </div>
        <iframe
        width="100%"
        allowfullscreen="allowfullscreen"
            mozallowfullscreen="mozallowfullscreen"
            msallowfullscreen="msallowfullscreen"
            oallowfullscreen="oallowfullscreen"
            webkitallowfullscreen="webkitallowfullscreen"
        src="https://momento360.com/e/u/9303891d183c47db90e91352a9b2969d?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"></iframe>
    <br>

        <div class="rows" >
            <div class="column">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Snow" style="width:100%;">
            </div>
            <div class="column">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Forest" style="width:100%">
            </div>
            <div class="column">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Mountains" style="width:100%">
            </div>
            <div class="column">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Mountains" style="width:100%">
            </div>
        </div>
    <br>
    <hr>

        <div class="rows" >

        <span>
            Kamar tersedia dihari yang anda pilih tersisa sebanyak <span style="color:red">3 Kamar!</span>
        </span>
        <span style="padding-left:30%;">
            <button> Pilih Kamar anda </button>
        </span>
        <br>
        <br>
        <br>
        </div>

    </div>
    <div class="contain" style="padding-top:2%;background-color:#F3F6F5;">
        <span style="font-size:22px;"><b>Kamar di Hotel Horison Ultima Bekasi</b> </span>
    </div>
    <br>
    <div class="contain" style="background-color:white;">
        <div class="rows" >
            <div class="column">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Snow" style="width:80%;"><br>
                <div class="rows" style="width:80%" >
                    <div class="column">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Snow" style="width:100%;">
                    </div>
                    <div class="column">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Forest" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Mountains" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Mountains" style="width:100%">
                    </div>
                </div>
            </div>
            <div class="column" style="padding-left:2%;padding-top:1%">
                <p style="font-size:24px;"> Deluxe Twin Room </p>
                <br>

                <div class="rows" style="width:100%" >
                    <div class="column" style="font-size:18px;">
                        <b><p style="font-size:18px">Info Kamar </b> </p>
                        <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                        <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Single Bed<br>
                        <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 23 sqm<br>
                    </div>

                    <div class="column" style="font-size:18px;">
                        <b><p style="font-size:18px">Layanan</b> </p>
                        <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                        <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Single Bed<br>
                        <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 23 sqm<br>
                    </div>
                </div>

            </div>

            <div class="column" style="padding-left:10%;padding-top:10%">
                <span style="color:red;">Tersisa 3 kamar lagi! </span><br>
                <span >
                    <button>Pesan Sekarang</button>
                </span>
            </div>

        </div>
    </div>
</div>

<!-- DATA UNTUK MOBILE HALAMAN AWAL -->
<div class="mobile" id="mobile" >
    <nav class="navbar navbar-default" style="background-color:#3A7765;">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:white;font-size:36px;">TRAVELRAFIF</a>
        </div>

    </div>
    </nav>
    <div class="contain" style="background-color:white;">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:1080px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:880px;overflow:hidden;">
                <div>
                    <iframe data-u="image" id="myImage" width="100%"
                    allowfullscreen="true"
                    frameborder="0"
                    src="https://panoraven.com/slider/kK1dNWcEZf"> </iframe>
                    <img data-u="thumb" src="https://i.ibb.co/0hgFCQ7/gambar3.png" />
                </div>
                <div>
                    <img data-u="image" src="img/032.jpg" />
                    <img data-u="thumb" src="img/032-s190x90.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/033.jpg" />
                    <img data-u="thumb" src="img/033-s190x90.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/034.jpg" />
                    <img data-u="thumb" src="img/034-s190x90.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/035.jpg" />
                    <img data-u="thumb" src="img/035-s190x90.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/036.jpg" />
                    <img data-u="thumb" src="img/036-s190x90.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/037.jpg" />
                    <img data-u="thumb" src="img/037-s190x90.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/038.jpg" />
                    <img data-u="thumb" src="img/038-s190x90.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/039.jpg" />
                    <img data-u="thumb" src="img/039-s190x90.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/040.jpg" />
                    <img data-u="thumb" src="img/040-s190x90.jpg" />
                </div>
            </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slideshow html</a>
            <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:200px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
                <div data-u="slides">
                    <div data-u="prototype" class="p" style="width:250px;height:190px;">
                        <div data-u="thumbnailtemplate" class="t"></div>
                        <svg viewbox="0 0 16000 16000" class="cv">
                            <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                            <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                            <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">

            </div>
            <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">

            </div>
        </div>

    <br>

    <div class="head" style="padding-left:3%;">
        <div style="font-size:42px"><b>Horison Ultima Bekasi</b><img style="padding-left:1%;"src="https://i.ibb.co/FWsH4nf/Group-1-1.png" width="150px;"><br></div><br>
        <b><span style="font-size:36px"> <img src="https://imgur.com/XW23AfN.png" alt="Mountains" style="width:35px">
            Lokasi</b></span>
        <div style="padding-top:1%; font-size:32px;"> Jalan Uluwatu 123. Bekasi Utara. Jakarta. 17610 </div><br>
    </div>
    <hr>
    <br>
    <b><span style="font-size:36px">Deskripsi </span><br></b>
      <p style="padding:15px;font-size:32px;" align="justify">  Hotel ini merupakan hotel yang terdiri dari lorem ipsum sum lorem
        Hotel ini merupakan hotel yang terdiri dari lorem ipsum sum lorem
        Hotel ini merupakan hotel yang terdiri dari lorem ipsum sum lorem
        Hotel ini merupakan hotel yang terdiri dari lorem ipsum sum lorem
      </p>
    <hr>
    <br>
    <b><span style="font-size:36px">Kebijakan Hotel</span><br></b>
    <ul class="a">
        <li  style="padding:5px;font-size:32px;"> Check-in mulai dari jam 14.00</li>
        <li  style="padding:5px;font-size:32px;"> Check-out maksimal jam 12.00</li>
        <li  style="padding:5px;font-size:32px;"> Membawa identitas </li>
        <li  style="padding:5px;font-size:32px;"> Deposit Rp100.000</li>
    </ul>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>

    <nav class="shadow-lg navbar fixed-bottom navbar-light rounded" style="background-color:#EFECEC;padding-bottom:50px;padding-top:50px;">
        <a class="navbar-brand" href="#" style="font-size:32px;">Hanya tersisa <span style="color:red;">3 kamar lagi! </span><span style="padding-left:15%;">
            <button onclick="myFunction();"> Lihat Kamar </button>
        </span><br></a>
      </nav>
</div>
</div>


<!-- HALAMAN PEMESANAN KAMAR-->

<div class="mobile2" id="mobile2" >
    <nav class="navbar navbar-default" style="background-color:#3A7765;">
        <div class="container-fluid">
            <div class="navbar-header" >
                <div class="rows">
                <div class="col-sm-2" style="padding:15px;">
                 <button onclick="myFunction()">
                 <img src="https://imgur.com/aksZmFn.png" width="60px;">
                 </button>
                </div>
                <div class="col-sm-10" style="padding:5px;">

                        <span style="color:white;font-size:38px;"><b>Horison Ultima Bekasi</b></span><br>
                        <span style="font-size:32px;color:white;">Bekasi, Jawa Barat</span>

                </div>
                </div>
            </div>
        </div>
    </nav>
    <br>

    <div class="rows" style="background-color:white;padding:15px;border-radius:10px;">
        <div style="width:500px;height:100px;border:1px solid #4A4A4A;font-size:32px;padding:5px;" class="column3">
        <span><b>Check-in:</b><br></span>
        <span style="color:#3A7765;">{{  now()->toDateString('Y-m-d') }}</span>
        </div>
        <div style="bwidth:500px;height:100px;border:1px solid #4A4A4A;font-size:32px;padding:5px;" class="column3">
            <span><b>Durasi:</b><br></span>
            <span style="color:#3A7765;">2 Malam</span>
        </div>
        <div style="width:500px;height:100px;border:1px solid #4A4A4A;font-size:32px;padding-bottom:15px;" class="column3">
            <span><b>Jumlah Tamu:</b><br></span>
            <span style="color:#3A7765;">2 Tamu</span>
        </div>
    </div>
    <br>
    <div class="contain" style="padding:25px;">
        <div style="background-color:white;border-radius:15px;">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/d8/0a/16/img-hotel.jpg" alt="Mountains" style="width:100%;height:300px">
        </div>

        <div style="padding:10px;background-color:white;">
            <p style="font-size:45px;padding-top:2%;padding-left:4%;"><b>Deluxe Room</b><br>
            <hr size="100">
            </p>
            <br>
        </div>
        <div style="padding:2px;background-color:white;">

            <div class="rows" style="width:100%;padding-left:4%;"  >
                <div class="column4" style="font-size:34px;">
                    <b><p style="font-size:36px">Info Kamar </b> </p>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Max 2 Tamu <br>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Single Bed<br>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> 23 sqm<br>
                </div>

                <div class="column4" style="font-size:34px;">
                    <b><p style="font-size:36px">Layanan</b> </p>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Without Breakfast <br>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Non Refundable<br>
                    <img src="https://imgur.com/K5sza9m.png" height="20px" width="20px"> Free Wifi<br>
                </div>
            </div>
            <br>
            <br>

            <span class="navbar-brand" href="#" style="font-size:32px;padding-left:4%;">Hanya tersisa <span style="color:red;">3 kamar lagi! </span></span>
            <br><br><br>
            <div class="rows" >
                <span style="font-size:36px;padding-left:4%;padding-top:2%">
                    LIHAT DETAIL</span>
                </span>
                <span style="margin-left:35%">
                    <button class="but"> Pesan Sekarang </button>
                </span>

            </div>
        <BR>
            <BR>
        </div>
<br>
<br>

</div>
<br>

<br>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
function myFunction() {
  var x = document.getElementById("mobile");
  var y = document.getElementById("mobile2");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display ="none"
  } else {
    y.style.display = "block";
    x.style.display = "none";

  }
}
</script>

<script>

function selectSmall(){
    x= document.getElementById("imgcol1").src;
    if(x=="https://i.ibb.co/gtKZs6z/gambar.png"){
        return "https://panoraven.com/slider/kK1dNWcEZf";

    }
    else if (x=="https://i.ibb.co/0sL7gq4/gambar1.png" ){
        return"https://momento360.com/e/u/9303891d183c47db90e91352a9b2969d?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";
    }

    else if(x=="https://i.ibb.co/FJcb7zV/gambar2.png"){
        return"https://momento360.com/e/u/1f364de980484f27a39b836678131252?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }

    else if(x=="https://i.ibb.co/0hgFCQ7/gambar3.png"){
        return"https://momento360.com/e/u/76892064d41c41a7bae6166758e2ab02?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }

    else if(x=="https://i.ibb.co/Pchrm5P/gambar4.png"){
        return"https://momento360.com/e/u/55df697591334df5a53db4b3fa6ea9cd?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }

}


function selectImage(){
    data =document.getElementById('myImage').src;
    if(data=="https://momento360.com/e/u/9303891d183c47db90e91352a9b2969d?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol1').src="https://i.ibb.co/0sL7gq4/gambar1.png";
    }
    else if(data=="https://panoraven.com/slider/kK1dNWcEZf"){
        document.getElementById('imgcol1').src="https://i.ibb.co/gtKZs6z/gambar.png";
    }

    else if(data=="https://momento360.com/e/u/1f364de980484f27a39b836678131252?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol1').src="https://i.ibb.co/FJcb7zV/gambar2.png";
    }

    else if(data=="https://momento360.com/e/u/76892064d41c41a7bae6166758e2ab02?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol1').src="https://i.ibb.co/0hgFCQ7/gambar3.png";
    }
    else if(data=="https://momento360.com/e/u/55df697591334df5a53db4b3fa6ea9cd?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol1').src="https://i.ibb.co/Pchrm5P/gambar4.png";
    }

}

function imageChange(){
    y=selectSmall()
    selectImage()
    document.getElementById('myImage').src=y;

}

</script>

<script>
function selectSmall2(){
    x= document.getElementById("imgcol2").src;
    if(x=="https://i.ibb.co/gtKZs6z/gambar.png"){
        return "https://panoraven.com/slider/kK1dNWcEZf";

    }
    else if (x=="https://i.ibb.co/0sL7gq4/gambar1.png" ){
        return "https://momento360.com/e/u/9303891d183c47db90e91352a9b2969d?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";
    }

    else if(x=="https://i.ibb.co/FJcb7zV/gambar2.png"){
        return "https://momento360.com/e/u/1f364de980484f27a39b836678131252?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }

    else if(x=="https://i.ibb.co/0hgFCQ7/gambar3.png"){
        return"https://momento360.com/e/u/76892064d41c41a7bae6166758e2ab02?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }
    else if(x=="https://i.ibb.co/Pchrm5P/gambar4.png"){
        return"https://momento360.com/e/u/55df697591334df5a53db4b3fa6ea9cd?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }




}
function selectImage2(){
    data =document.getElementById('myImage').src;
    if(data=="https://momento360.com/e/u/9303891d183c47db90e91352a9b2969d?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol2').src="https://i.ibb.co/0sL7gq4/gambar1.png";
    }
    else if(data=="https://panoraven.com/slider/kK1dNWcEZf"){
        document.getElementById('imgcol2').src="https://i.ibb.co/gtKZs6z/gambar.png";
    }
    else if(data=="https://momento360.com/e/u/1f364de980484f27a39b836678131252?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol2').src="https://i.ibb.co/FJcb7zV/gambar2.png";
    }

    else if(data=="https://momento360.com/e/u/76892064d41c41a7bae6166758e2ab02?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol2').src="https://i.ibb.co/0hgFCQ7/gambar3.png";
    }
    else if(data=="https://momento360.com/e/u/55df697591334df5a53db4b3fa6ea9cd?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol2').src="https://i.ibb.co/Pchrm5P/gambar4.png";
    }
}


function imageChange2(){
    y=selectSmall2()
    selectImage2()
    document.getElementById('myImage').src=y;

}

function selectSmall3(){
    x= document.getElementById("imgcol3").src;
    if(x=="https://i.ibb.co/gtKZs6z/gambar.png"){
        return "https://panoraven.com/slider/kK1dNWcEZf";

    }
    else if (x=="https://i.ibb.co/0sL7gq4/gambar1.png" ){
        return "https://momento360.com/e/u/9303891d183c47db90e91352a9b2969d?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";
    }

    else if(x=="https://i.ibb.co/FJcb7zV/gambar2.png"){
        return "https://momento360.com/e/u/1f364de980484f27a39b836678131252?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }

    else if(x=="https://i.ibb.co/0hgFCQ7/gambar3.png"){
        return"https://momento360.com/e/u/76892064d41c41a7bae6166758e2ab02?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }

    else if(x=="https://i.ibb.co/Pchrm5P/gambar4.png"){
        return"https://momento360.com/e/u/55df697591334df5a53db4b3fa6ea9cd?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }




}
function selectImage3(){
    data =document.getElementById('myImage').src;
    if(data=="https://momento360.com/e/u/9303891d183c47db90e91352a9b2969d?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol3').src="https://i.ibb.co/0sL7gq4/gambar1.png";
    }
    else if(data=="https://panoraven.com/slider/kK1dNWcEZf"){
        document.getElementById('imgcol3').src="https://i.ibb.co/gtKZs6z/gambar.png";
    }

    else if(data=="https://momento360.com/e/u/1f364de980484f27a39b836678131252?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol3').src="https://i.ibb.co/FJcb7zV/gambar2.png";
    }

    else if(data=="https://momento360.com/e/u/76892064d41c41a7bae6166758e2ab02?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol3').src="https://i.ibb.co/0hgFCQ7/gambar3.png";
    }

    else if(data=="https://momento360.com/e/u/55df697591334df5a53db4b3fa6ea9cd?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol3').src="https://i.ibb.co/Pchrm5P/gambar4.png";
    }
}


function imageChange3(){
    y=selectSmall3()
    selectImage3()
    document.getElementById('myImage').src=y;

}

function selectSmall4(){
    x= document.getElementById("imgcol4").src;
     if(x=="https://i.ibb.co/gtKZs6z/gambar.png"){
        return "https://panoraven.com/slider/kK1dNWcEZf";

    }
    else if (x=="https://i.ibb.co/0sL7gq4/gambar1.png" ){
        return "https://momento360.com/e/u/9303891d183c47db90e91352a9b2969d?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";
    }

    else if(x=="https://i.ibb.co/FJcb7zV/gambar2.png"){
        return "https://momento360.com/e/u/1f364de980484f27a39b836678131252?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }

    else if(x=="https://i.ibb.co/0hgFCQ7/gambar3.png"){
        return"https://momento360.com/e/u/76892064d41c41a7bae6166758e2ab02?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }

    else if(x=="https://i.ibb.co/Pchrm5P/gambar4.png"){
        return"https://momento360.com/e/u/55df697591334df5a53db4b3fa6ea9cd?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75";

    }




}
function selectImage4(){
    data =document.getElementById('myImage').src;
    if(data=="https://momento360.com/e/u/9303891d183c47db90e91352a9b2969d?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol4').src="https://i.ibb.co/0sL7gq4/gambar1.png";
    }
    else if(data=="https://panoraven.com/slider/kK1dNWcEZf"){
        document.getElementById('imgcol4').src="https://i.ibb.co/gtKZs6z/gambar.png";
    }

    else if(data=="https://momento360.com/e/u/1f364de980484f27a39b836678131252?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol4').src="https://i.ibb.co/FJcb7zV/gambar2.png";
    }

    else if(data=="https://momento360.com/e/u/76892064d41c41a7bae6166758e2ab02?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol4').src="https://i.ibb.co/0hgFCQ7/gambar3.png";
    }

    else if(data=="https://momento360.com/e/u/55df697591334df5a53db4b3fa6ea9cd?utm_campaign=embed&utm_source=other&utm_medium=other&heading=0&pitch=0&field-of-view=75"){
        document.getElementById('imgcol4').src="https://i.ibb.co/Pchrm5P/gambar4.png";
    }
}


function imageChange4(){
    y=selectSmall4()
    selectImage4()
    document.getElementById('myImage').src=y;

}



</script>
<script type="text/javascript">jssor_1_slider_init();
</script>
</body>
<br>
<br>
<br><br>
<br>



</html>
