<form id="fileupload" method="POST" action="http://up.qiniu.com" accept-charset="UTF-8" enctype="multipart/form-data">

    {{ Form::hidden('token', (new TokenPresenter())->generate()) }}

    <p id="uploader-notice"><i class="icon-upload"></i><span>{{ Lang::get('app.uploader') }}</span></p>

    {{ Form::file('file') }}

</form>