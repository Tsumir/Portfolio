<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Portfolio') }}</title>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src = "https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script>
        $(document).ready(function () {
            $.ajax({
                url:"/posts/countAjax/1",
                type:"get",
                data:'_token = <?php echo csrf_token() ?> ',
                dataType: "json",
                success: function (data) {
                    $("#cart-count").html(data);
                    $("#cart-count_fixed").html(data);
                    $("#cart-countsm").html(data);
                    $("#cart-count_fixedsm").html(data);
                }
            });
        })
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="/css/mystyle.css">
     <!-- Style HOMEPAGE-->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 0;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <!-- НАВИГАЦИОННАЯ ПАНЕЛЬ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">{{ config('app.name', 'Portfolio') }}<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('posts') }}">Laravel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        JS,PHP,AJAX,CSS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ asset('gallery') }}">Галлерея</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ asset('animation') }}">Анимации</a>
                    </div>
                </li>
            </ul>
            <a href="{{ asset('cart') }}" class="btn btn-dark">
                Избранное <span id="cart-count" class="badge badge-light">0</span>
            </a>
            <ul class="nav justify-content-end">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выход') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search" id="search">
                <script>
                    $('#search').keyup(function(){
                        $("#resSearch").empty();
                        var Value = $('#search').val();
                        $.ajax({
                            url:"/getsearch/"+Value,
                            type:"GET",
                            data:'_token = <?php echo csrf_token() ?>',
                            dataType: "json",
                            success: funcSuccess1
                        });
                    });
                    function funcSuccess1(data) {
                        var xy = Object.values($('#search').offset());
                        var widthScreen = document.documentElement.scrollWidth;
                        var divWidth = widthScreen - xy[1] + $('#search').width();
                        $("#resSearch").css({"left": xy[1]-$('#search').width()+"px", "top":"56px", "width":divWidth+"px"});
                        var ids = data.length - 1;
                        var result = new Array();
                        $("#resSearch").empty();
                        for(var i = 0; i<=ids; i++){
                            result[i] = Object.values(data[i]);
                            $('#resSearch').append('<li class="rowSearch"><a href="/posts/viewpost/'+result[i][0]+'"><div class="d-flex justify-content-between"><div>'+result[i][1]+'</div><div>#'+result[i][0]+'</div><div>'+result[i][2]+'</div></div></a></li>');
                        }
                    }
                </script>
            </form>
        </div>
    </nav>
    <div id="resSearch" style="position: absolute; z-index:100;"><ul id="resSearch" class="" style="background-color: #343a40;"></ul>
    </div>
</head>

<body>
    <div class="row m-0" style="padding-top: 55px">
        @yield('content')
    </div>
</body>




