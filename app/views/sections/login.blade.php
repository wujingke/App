<div class="login modal">
  <div class="content">
    <a class="close switch"><i class="icon-cancel"></i></a>
    {{ Form::open(array('url'=>'session/store')) }}
      <p class="welcome"><i class="icon-login"></i>{{ Lang::get('page.welcome_back') }}</p>
      <ul>
        <li class="field">
          {{ Form::text('username', '', array('class'=>'input', 'placeholder'=>Lang::get('page.email_or_username'), 'autocomplete'=>'off')) }}
        </li>
        <li class="field">
          {{ Form::password('password', array('class'=>'input', 'placeholder'=>Lang::get('page.password'), 'autocomplete'=>'off')) }}
        </li>
        <li>
          <label class="inline">
            {{ Form::checkbox('remember') }}
            <span>{{ Lang::get('page.remember_me') }}</span>
          </label>
          {{ Form::submit(Lang::get('page.login'), array('class'=>'btn-def btn-def-orange pull_right')) }}
        </li>
      </ul>
    {{ Form::close() }}
  </div>
</div>