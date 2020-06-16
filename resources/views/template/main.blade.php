<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/pages.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('/fontawesome/css/font.css')}}">
    
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg d-block">
        <div class="container">
        <a href="{{url('/')}}" class="navbar-brand"><img src="{{asset('/image/logo.png')}}" alt="" srcset=""></a>
          <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <span class="toggler"></span>
              <span class="toggler"></span>
              <span class="toggler"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-tabs">
                    <div class="search">
                        <div class="icon">
                            <a href="http://"><i class="fab fa-facebook mr-2 text-light"></i></a>
                            <a href="http://"><i class="fab fa-instagram mr-2 text-light"></i></i></a>
                            <a href="http://"><i class="fab fa-youtube mr-2 text-light"></i></i></a>
                            <a href="http://"><i class="fab fa-twitter mr-2 text-light"></i></i></a>
                        </div>
                        <p class=""><i class="fas fa-user"></i> 0813-6239-8993</p>
                    </div>
                    <div class="navs">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active"  style="font-size:10px; color: white" href="{{ url('/') }}">Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size:10px; color: white"  href="">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="font-size:10px; color: white" href="{{ url('/post/1') }}">Sejarah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="font-size:10px; color: white" href="">About</a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('main')

    <div class="footer-dark">
        <div class="container footer">
            <div class="footer-dep about-us">
                <p class="title-footer">About Us</p>
                <p class="text-about">Desa Jangga Dolok adalah Salah satu desa wisata yang ada di Kecamatan Lumbanjulu, Kabupaten Toba, Provinsi Sumatera Utara, Indonesia. Desa ini berjarak sekitar 40 Km dari kota Balige. Jika ingin mengunjunginya, dapat menggunakan transportasi umum kurang lebih selama 1jam. Kemudian wisatawan harus berjalan kaki dari jalan raya dan menuruni jalan yang sudah beraspal mulus, dengan waktu tempuh kurang lebih 30 menit. 
                </p>
            </div>
            <div class="footer-dep contact-us">
                <p class="title-footer">Contact Us</p>
                <ul class="list-sosmed">
                    <li><i class="fab fa-user"></i> 0813-6239-8993</li>
                    <li><i class="fab fa-mailbox"></i> JanggaDolok@gmail.com</li>
                </ul>
            </div>
            <div class="footer-dep follow-us">
                <p class="title-footer">Follow Us</p>
                <ul class="list-sosmed">
                    <li><i class="fab fa-facebook"></i> Facebook</li>
                </ul>
            </div>
            
        </div>
        <div class="col-md-12">
           <div class="container footer-down">
               <p class="text-footer">Copyright &copy; 2020</p>
            </div> 
        </div>
    </div>




    
    <script src="{{ asset('/js/jquery-3.4.1.js') }}"></script>
   
    <script src="{{ asset('/js/aos.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    @yield('tweenMax')
    @yield('script')
</body>
</html>