<form id="fileupload" method="POST" action="http://up.qiniu.com" accept-charset="UTF-8" enctype="multipart/form-data">

	{{ Form::hidden('token', (new TokenPresenter())->generate()) }}

	{{ Form::file('file') }}

</form>