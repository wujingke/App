<ul class="create-reply">

    {{ Form::open(array('url'=>'reply/store')) }}

    {{ Form::hidden('topic_id', $topic->id) }}

    <li class="field">

        {{ $errors->first('content', '<p class="nice-message"><i class="icon-right-dir"></i>:message</p>') }}

        {{ Form::textarea('content', '', array('class'=>'textarea input', 'rows'=>'3', 'autocomplete'=>'off')) }}

    </li>

    <li class="text-right">

        {{ Form::submit(Lang::get('user.reply'), array('class'=>'btn-def btn-def-orange')) }}

    </li>

    {{ Form::close() }}

</ul>
