<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="jtpl-background-area jqbga-container jqbga-web--image" background-area="" style="background-image: url(&quot;https://image.jimcdn.com/app/cms/image/transf/none/path/s6c0188f3f2194ffd/backgroundarea/i214a6d1871130433/version/1522826819/image.jpg&quot;);"></div>

    <style>
        [type=text] {
            background: transparent;
            display: block;
            margin: 0 auto;
            width: 60%;
            border: 0;
            border-bottom: 2px solid rgba(0, 0, 0, .6);
            height: 35px;
            line-height: 45px;
            margin-bottom: 10px;
            font-size: 1.3em;
            color: #000000;
        }

        .bgc {
            background: #C7FBFF;
            background: -moz-linear-gradient(top, #C7FBFF 0%, #9DC6CF 50%, #5C79FF 100%);
            background: -webkit-linear-gradient(top, #C7FBFF 0%, #9DC6CF 50%, #5C79FF 100%);
            background: linear-gradient(to bottom, #C7FBFF 0%, #9DC6CF 50%, #5C79FF 100%);
        }

        .bordec {
            border-radius: 25px;

        }
        /* FUENTE */

        @font-face {
            font-family: Hemondalisa;
            src:url(../css/Hemondalisa.ttf)
        }
        .font {
            font-family: Hemondalisa;
            font-size: 80px;
            color: #000000;
        }

        /* BG */
        .jqbga-slider--image,
        .jqbga-web--image {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .jtpl-background-area {
            position: fixed;
            height: 100vh;
            width: 100vw;
            top: 0;
            left: 0;
            z-index: -1;
        }
    </style>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<main class="py-4">
    @yield('content')
</main>

</html>
