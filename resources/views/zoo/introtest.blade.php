<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        @yield('javascript')
        <script src="{{ secure_asset('js/jquery.multiscroll.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="{{ secure_asset('js/multiscroll.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        <div id="app">
            <div class="fixed-top">
                {{-- 画面上部に表示するナビゲーションバーです。 --}}
                <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/top') }}">
                            <img src="{{asset('/images/topicon.png')}}" class="topicon" alt="topicon">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto ml-auto">
                                <li class="nav-item"><a class="nav-link" href="{{ url('/posts') }}">投稿をみる</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/intro') }}">動物たちの紹介</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">動物園の紹介</a></li>
                            </ul>
    
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                            @guest
                                <li><a class="nav-link" href="{{ route('register') }}">{{ __('messages.Register') }}</a></li>
                                <li><a class="nav-link" href="{{ route('login') }}">{{ __('messages.Login') }}</a></li>
                            {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('messages.Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        
                                        <a class="dropdown-item" href="{{ url('/admin/zoo/index') }}">
                                            マイページ
                                        </a>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-0">
                <div id="multiscroll">
                    <div class="ms-left">
                        <div class="ms-section"><h1>Left Sec1</h1>
                        <img src="{{asset('/images/topintro_whitetiger.jpg')}}" class="img-fluid rounded float-md-left" alt="topintro">
                        </div>
                        <div class="ms-section"><h1>Left Sec2</h1></div>
                        <div class="ms-section"><h1>Left Sec3</h1></div>
                    </div>
                    <div class="ms-right">
                        <div class="ms-section"><h1>Right Sec1</h1></div>
                        <div class="ms-section"><h1>Right Sec2</h1></div>
                        <div class="ms-section"><h1>Right Sec3</h1></div>
                    </div>
                </div>

            </main>
        </div>
    </body>
</html>