<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ env('META_DESCRIPTION') }}">
        <meta name="keywords" content="{{ env('META_KEYWORDS') }}">

        <title>{{ env('APP_NAME') }} @if ( isset ($title ) ) | {{ $title }} @endif</title>

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        @yield('customcss')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/buttons.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('images/logo/logo_64.png') }}" width="32" height="32" />
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span> </span>
                    <span> </span>
                    <span> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Features
              </a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              News <span class="navbar-arrow"></span>
            </a>
            <div class="dropdown-menu fluid" aria-labelledby="navbarDropdownMenuLink">
              <p>
                News at a glance.
              </p>
              <a class="dropdown-item" href="#">View all news</a>
              <a class="dropdown-item" href="#">View server status</a>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Community</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Shop</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            @if(isset(Auth::user()->id))
            <li class="nav-item red dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar-box">
                <div class="avatar"></div>
              </div>
                {{ Auth::user()->username }} <span class="navbar-arrow"></span>
            </a>
            <div class="dropdown-menu fluid" aria-labelledby="navbarDropdownMenuLink">
              <p>
                User Actions
              </p>
              <a class="dropdown-item" href="{{ url('/acp') }}">
                Account Panel
              </a>
              <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Log out
              </a>
            </div>
          </li>
          @else
          <li class="nav-item red mr-5">
            <a class="nav-link" href="{{ url('/login') }}">Log in</a>
          </li>
          <li class="nav-item red">
            <a class="nav-link" href="{{ url('/register') }}">Regsiter</a>
          </li>
          @endif
          </ul>
        </div>
      </nav>

      <div class="bottom-sticky">
        <div class="container text-center mt-15">
        <h6 class="text-white inline-block mr-15">
          <img src="{{ asset('images/logo/logo_64.png') }}" width="32" height="32" /> Pear CMS release
        </h6>
        <div class="ticker vertical-align-middle text-center">
          <div class="inner" id="days">
            ??
          </div>
          <div class="countdown text-grey text-small text-upper">
            days
          </div>
        </div>

        <div class="ticker vertical-align-middle text-center">
          <div class="inner" id="hours">
            ??
          </div>
          <div class="countdown text-grey text-small text-upper">
            hours
          </div>
        </div>

        <div class="ticker vertical-align-middle text-center">
          <div class="inner" id="mins">
            ??
          </div>
          <div class="countdown text-grey text-small text-upper">
            mins
          </div>
        </div>

        <div class="ticker vertical-align-middle text-center">
          <div class="inner" id="secs">
            ??
          </div>
          <div class="countdown text-grey text-small text-upper">
            secs
          </div>
        </div>

      </div>
      </div>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>