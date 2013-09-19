<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  {{ HTML::style('css/gumby.css') }}
  {{ HTML::style('css/style.css') }}
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  {{ HTML::script('js/jquery.placeholder.js') }}
</head>
<body>
  <div class="wrapper">
    <div class="nav nav-bar top-fixed">
      <div class="row">
        <ul class="io columns tiles">
          @if(Auth::check())
            <li><a href="">{{ Auth::user()->username }}</a></li>
            <li><a href="">{{ Lang::get('page.logout') }}</a></li>
          @else
            <li class="login"><a href="">{{ Lang::get('page.login') }}</a></li>
            <li><a href="">{{ Lang::get('page.signup') }}</a></li>
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
          <div class="nice-box"></div>
          <div class="nice-box"></div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="row">
        <p>&copy; 2013 Sofunny.pw · All rights reserved.</p>
      </div>
    </div>
  </div>
  @unless(Auth::check())
    @include('sections.login')
  @endunless
  {{ HTML::script('js/app.js') }}
</body>
</html>
