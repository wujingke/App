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

  $('.action-delete').click (e) ->
  	e.preventDefault()
  	me = $(this)
  	me.parents('li').children('div.hover').show();
  	$.ajax
  		url: me.attr('href')
  		type: 'DELETE'
  		success: (data) ->
  			if data.success
  				me.parents('li').children('div.hover').removeClass('ajax');

  $('.action-frozen').click ->
  	me = $(this)
  	me.next().show()
  	$.ajax
  		url: me.data('url')
  		type: 'PUT'
  		success: (data) ->
  			if data.success
  				me.toggleClass 'actived'
  				me.next().hide()

  $('.page-view').each ->
  	me = $(this)
  	$.ajax
  		url: me.data('url')
  		success: (data) ->
  			me.children('span').text(data.page.view)

  $('.like').click ->
  	me = $(this)
  	me.toggleClass 'done'
  	$.ajax
  		url: me.data('url')
  		type: 'POST'
  		data:
  			_token: me.data('token')
  		success: (data) ->
  			if data.success
  				me.children('span').text(data.likes)