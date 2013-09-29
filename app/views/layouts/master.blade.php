<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  {{ HTML::style('css/jquery.jcrop.css') }}
  {{ HTML::style('css/gumby.css') }}
  {{ HTML::style('css/style.css') }}
  {{ HTML::script('js/jquery.js') }}
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
        <p>&copy; 2013 Sofunny.pw · All rights reserved.</p>
      </div>
    </div>
  </div>
  @unless(Auth::check())
    @include('sections.login')
  @endunless
  {{ HTML::script('js/timeago.js') }}
  {{ HTML::script('js/timeago.lang.zh.js') }}
  {{ HTML::script('js/jquery.placeholder.js') }}
  {{ HTML::script('js/jquery.jcrop.js') }}
  {{ HTML::script('js/app.js') }}
</body>
</html>
