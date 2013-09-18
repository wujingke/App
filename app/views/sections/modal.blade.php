<div class="login modal">
  <div class="content">
    <a class="close switch"><i class="icon-cancel"></i></a>
    {{ Form::open(array('url'=>'/')) }}
    	<p>{{ Lang::get('page.login') }}</p>
    	<ul>
    		<li class="field">
    			{{ Form::text('email', '', array('class'=>'input')) }}
    		</li>
    		<li class="field">
    			{{ Form::text('password', '', array('class'=>'input')) }}
    		</li>
    		<li>
	    		<label class="inline">
	    			{{ Form::checkbox('remember', true) }}
	    			{{ Lang::get('page.remember_me') }}
	    		</label>
    			{{ Form::submit(Lang::get('page.login'), array('class'=>'btn-def btn-def-orange pull_right')) }}
    		</li>
    	</ul>
    {{ Form::close() }}
  </div>
</div>