<html>
<head>
    <title>Localization Example</title>
    <meta charset="utf-8">

    <link rel="stylsheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="app">
    <div style="background-color: #343a40;"
        <nav class="navbar navbar-expend-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle"
                        href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                <img width="20" src="{{asset('img/en.png')}}">
                                English
                                @break
                                @case('ru')
                                <img width="20" src="{{asset('img/ru.png')}}">
                                Русский язык
                                @case('kz')
                                <img width="20" src="{{asset('img/kz.png')}}">
                                Қазақ тілі
                                @break
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"><img width="20" src="{{asset('img/en.png')}}"> Emglish </a><br>
                            <a class="dropdown-item" href="en"><img width="20" src="{{asset('img/kz.png')}}"> Қазақ тілі </a><br>
                            <a class="dropdown-item" href="en"><img width="20" src="{{asset('img/ru.png')}}"> Русский язык </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main class="ру-4">
        @yield('content')
    </main>
</div>
</body>
</html>