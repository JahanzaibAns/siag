<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SIAG</title>
    <link rel="icon" href="{{asset('assets/img/cropped-SIAG-final-logo-1-32x32.webp')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('assets/img/cropped-SIAG-final-logo-1-192x192.webp')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('assets/img/cropped-SIAG-final-logo-1-180x180.webp')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}"  />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="layout-default">
    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="wrapper">
        <!-- Header -->

        <header>
            <div class="topbar d-flex align-items-center" style="height:100px;">
                <nav class="navbar navbar-expand">
                    <div class="d-flex justify-content-center w-100">
                        <!-- LOGO -->
                        {{-- <div class="text-center">
                            <img src="{{asset('assets/img/logo.webp')}}" alt="" class="logo">
                        </div> --}}
                    </div>
                    <div class="mobile-toggle-menu"><i class="bx bx-menu"></i></div>
        
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="#"> <i class="bx bx-search"></i></a>
                            </li>
                        </ul>
                    </div>
        
                    @auth
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ Auth::user()->photo ? asset('public/storage/' . Auth::user()->photo) : 'https://placehold.co/200' }}" class="user-img"
                                alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                                <!-- You can display other user info here -->
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
                                    <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
                                </form>
                            </li>

                        </ul>
                    </div>
                    @endauth
                </nav>
            </div>
        </header>
        

        <!-- // END Header -->
