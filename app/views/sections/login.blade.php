<div class="login modal">
  <div class="content">
    <a class="close switch"><i class="icon-cancel"></i></a>
    {{ Form::open(array('url'=>'session/store')) }}
      <p class="welcome"><i class="icon-login"></i>{{ Lang::get('page.welcome_back') }}</p>
      <ul>
        <li class="field">
          {{ Form::text('email', '', array('class'=>'input', 'placeholder'=>Lang::get('page.email_or_username'))) }}
        </li>
        <li class="field">
          {{ Form::password('password', array('class'=>'input', 'placeholder'=>Lang::get('page.password'))) }}
        </li>
        <li>
          <label class="inline">
            {{ Form::checkbox('remember') }}
            {{ Lang::get('page.remember_me') }}
          </label>
          {{ Form::submit(Lang::get('page.login'), array('class'=>'btn-def btn-def-orange pull_right')) }}
        </li>
      </ul>
      <ul class="three_up tiles text-center third-part-login">
      <!-- <li><a href=""><i class="icon-sina-weibo"></i></a></li>
      <li><a href=""><i class="icon-qq"></i></a></li>
      <li><a href=""><i class="icon-github"></i></a></li>-->  
    </ul>
    {{ Form::close() }}
  </div>
</div>