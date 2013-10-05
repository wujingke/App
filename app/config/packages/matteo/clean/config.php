<?php

return array(
	// Default tags as allowed by redactor (http://imperavi.com/redactor/)
	'stripTags' => '<code><span><div><label><a><br><p><b><i><del><strike><u><img><video><audio><iframe><object><embed><param><blockquote><mark><cite><small><ul><ol><li><hr><dl><dt><dd><sup><sub><big><pre><code><figure><figcaption><strong><em><table><tr><td><th><tbody><thead><tfoot><h1><h2><h3><h4><h5><h6>',
	'htmLawed' => array(
		'safe' => 1,
		'deny_attribute' => 'style',
		'comment' => 0,
		'elements' => 'code, span, div, label, a, br, p, b, i, del, strike, u, img, video, audio, iframe, object, embed, param, blockquote, mark, cite, small, ul, ol, li, hr, dl, dt, dd, sup, sub, big, pre, code, figure, figcaption, strong, em, table, tr, td, th, tbody, thead, tfoot, h1, h2, h3, h4, h5, h6',
		)
);