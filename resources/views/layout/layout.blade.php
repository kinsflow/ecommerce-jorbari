<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext">
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link rel="stylesheet" href="{{asset("font/fontawesome-all.min.css")}}">
    <link rel="stylesheet" href="{{asset("font/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("font/fontawesome5-overrides.min.css")}}">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid"><a class="navbar-brand" href="#"><img src="{{asset("images/WLADRED.svg")}}" width="60"
                                                                       height="60"></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="{{route("home")}}">
                        <p>-</p> home</a>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route("product")}}">shop</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route("blog")}}">blog</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route("search")}}">search</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="cart.html">cart</a></li>
{{--                <li class="nav-item" role="presentation"><a class="nav-link" href="#">login</a></li>--}}
            </ul>
        </div>
    </div>
</nav>
@yield("content")
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col col-12 d-flex justify-content-between">
                <div>
                    <p class="text-white d-inline-block"><a class="footer-link" href="#">about</a></p>
                    <p class="text-white d-inline-block"><a class="footer-link" href="#">contact</a></p>
                    <p class="text-white d-inline-block"><a class="footer-link" href="#">blog</a></p>
                    <p class="text-white d-inline-block"><a class="footer-link" href="#">story</a></p>
                </div>
                <div>
                    <p class="text-white d-inline-block"><a class="footer-link mr-0" href="#">Copyright wlad
                            2020</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
</body>
</html>
