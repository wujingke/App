{{ HTML::script('http://ctrl.u.qiniudn.com/jquery.ui.widget.js') }}

{{ HTML::script('http://ctrl.u.qiniudn.com/jquery.iframe-transport.js') }}

{{ HTML::script('http://ctrl.u.qiniudn.com/jquery.fileupload.js') }}

<script>

(function() {

    $(document).ready(function() {

        $('#fileupload').fileupload({

            url: 'http://up.qiniu.com',

            done: function (e, data) {

                //$('.notice').text('=> ' + data.result.hash);
            }

        }).on('fileuploadsubmit', function (e, data) {

            data.formData = $('form#fileupload').serializeArray();

            //$('.notice').text('Uploading..');

        });

    });

})();

</script>