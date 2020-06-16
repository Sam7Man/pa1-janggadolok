<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Chart.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/tagify.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-article.css') }}">

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>


<div id="app">
    <div id="wrapper" class="mr-5 mr-5">
        <div class="sidebar p-0" id="sidebar">
            <nav class="navbar">
                <div class="navbar-brand_s">
                    <p class="title-brand">Desa Jangga Dolok</p>
                </div>
                <div class="nav navbar-nav" id="collapsibleNavId">
                    <div class="nav-items">
                        <div href="" class="nav-links">
                            <a href="{{ url('admin') }}" class="link"><i class="fas fa-tachometer-alt icon"></i>Dashboard</a>
                        </div>
                    </div>
                    <div class="nav-items">
                        <div href="" class="nav-links">
                            <a href="{{ url('admin/data') }}" class="link"><i class="fas fa-book icon"></i>
                                Data</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="content" id="content">
            <div class="content-nav">
                <button id="sidebarCollapse" type="button" class="btn-collapse">
                    <span class="collapses"></span>
                    <span class="collapses"></span>
                    <span class="collapses"></span>
                </button>
                <div class="admin-content">
                    <div class="content">
                        <div class="admin">
                            <div class="dropdown open">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle ml-5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a href="" class="dropdown-item">Edit Profile</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 p-0">
                     
    
                    @yield('container')
    
    
    
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        Yakin Logout?
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-secondary" href="../logout.php">Ya</a>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
                <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
                <script src="{{asset('js/bootstrap.js')}}"></script>
                <script src="{{asset('js/Chart.js')}}"></script>
                <script src="{{asset('js/admin.js')}}"></script>
               @yield('javascript')
               
</body>
</html>