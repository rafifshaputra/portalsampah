<html>
    <head>
        <meta charset="utf-8">
        <title>Chart with VueJS</title>

    </head>
    <body>
        <div class="container">
            <center>
            <div style="width:550px;height:350px;">
        {!! Charts::assets() !!}
        {!! $chart->render() !!}
            </div>
            </center>
        </div>
    </body>
</html>

