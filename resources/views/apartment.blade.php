<!doctype html>
<html lang="en" id="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">
    <div class="row">
        <a href="#"><i class="fas fa-home fa-3x ml-3 text-dark"></i></a>

    </div>
    <div>sweet home</div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Best home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="#">Life style</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="#">About us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="#">Contact us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="row">
        <div class="col-sm-9">
            <div class="row">
                @foreach($obj as $item)
                    <div class="col-sm-4 mb-5">
                        <div class="card">
                            <div style="background-image: url('{{$item -> thumbnail}}'); background-size: cover; height: 253px;width: 253px"></div>
                            <div class="card-body">
                                <p class="card-text">{{$item -> name}}</p>
                                <p class="card-text">{{$item -> address}}</p>
                                <p class="card-text">{{$item -> address}}</p>
                                <p class="card-text">{{$item -> price}}</p>
                                <p class="card-text">{{$item -> general_information}}</p>
                                <p class="card-text">{{$item -> detail_information}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-3">
            <div class="mt-1 mb-1 "><strong>Dapibus ac facilisis in</strong></div>
            <ul class="list-group">
                <li class="list-group-item disabled">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="mt-1 mb-1"><strong>Dapibus ac facilisis in</strong></div>
            <ul class="list-group">
                <li class="list-group-item disabled">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
    <p class="text-center">
        {{$obj->links()}}
    </p>
</div>
<footer>
    <div class="text-center">
        Aptech FPT Copy right 2018
    </div>
</footer>

</body>
</html>