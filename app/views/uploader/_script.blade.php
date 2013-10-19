{{ HTML::script('http://ctrl.u.qiniudn.com/jquery.ui.widget.js') }}

{{ HTML::script('http://ctrl.u.qiniudn.com/jquery.iframe-transport.js') }}

{{ HTML::script('http://ctrl.u.qiniudn.com/jquery.fileupload.js') }}

<script>

(function() {

    $(document).ready(function() {

        $('#fileupload').fileupload({

            url: 'http://up.qiniu.com',

            done: function (e, data) {

                $('#uploader-notice>span').text('{{ Lang::get('app.uploader') }}');

                var originText = $('textarea').val();

                var pLink = '![](http://ampou.u.qiniudn.com/' + data.result.hash + ')\n';

                $('textarea').val(originText + pLink);
            }

        }).on('fileuploadsubmit', function (e, data) {

            data.formData = $('form#fileupload').serializeArray();

            $('#uploader-notice>span').text('{{ Lang::get('app.uploading') }}');

        });

    });

})();

</script>