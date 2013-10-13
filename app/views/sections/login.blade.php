<div class="login modal">

    <div class="content">

        <a class="close switch"><i class="icon-cancel"></i></a>

        {{ Form::open(array('url'=>'session/store')) }}

        <p class="welcome">
            <i class="icon-login"></i>
            {{ Lang::get('app.welcome_back') }}
        </p>

        <ul>
            <li class="field">
                {{ Form::text('username', '', array('class'=>'input', 'placeholder'=>Lang::get('user.account'), 'autocomplete'=>'off')) }}
            </li>

            <li class="field">
                {{ Form::password('password', array('class'=>'input', 'placeholder'=>Lang::get('user.password'), 'autocomplete'=>'off')) }}
            </li>

            <li>
                <label class="inline">
                    {{ Form::checkbox('remember') }}
                    <span>{{ Lang::get('app.remember_me') }}</span>
                </label>
                {{ Form::submit(Lang::get('user.login'), array('class'=>'btn-def btn-def-orange pull_right')) }}
            </li>
        </ul>

        {{ Form::close() }}

    </div>

</div>
