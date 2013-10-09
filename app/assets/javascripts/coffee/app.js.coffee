$(document).ready ->

  $('.timeago').timeago()

  updateCoords = (c) ->
    $('#x').val c.x
    $('#y').val c.y
    $('#w').val c.w
    $('#h').val c.h

  $('#cropbox').Jcrop
    aspectRatio: 1
    onSelect: updateCoords

