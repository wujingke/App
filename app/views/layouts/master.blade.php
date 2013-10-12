<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="http://me:9292/assets/application.css">
  <script type="text/javascript" src="http://me:9292/assets/application.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="nav nav-bar top-fixed">
      <div class="row">
        <a href="{{ URL::to('/') }}" class="logo"></a>
        <ul class="io columns tiles">
          @if(Auth::check())
            <li><a href="{{ URL::to('u/' . Auth::user()->username) }}">{{ Auth::user()->username }}</a></li>
            <li><a href="{{ URL::to('settings') }}">{{ Lang::get('page.settings') }}</a></li>
            <li><a href="{{ URL::to('logout') }}">{{ Lang::get('page.logout') }}</a></li>
          @else
            <li><a href="{{ URL::to('signup') }}">{{ Lang::get('page.signup') }}</a></li>
            <li class="login"><a href="{{ URL::to('login') }}">{{ Lang::get('page.login') }}</a></li>
          @endif
        </ul>
      </div>
    </div>
    <div class="master">
      <div class="row">
        <div class="eight columns">
          <div class="nice-box">
            @yield('app')
          </div>
        </div>
        <div class="four columns">
          @yield('sidebar')
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="row">
        <p>&copy; 2013 ampou.com · All rights reserved.</p>
      </div>
    </div>
  </div>
  @unless(Auth::check())
    @include('sections.login')
  @endunless
</body>
</html>
