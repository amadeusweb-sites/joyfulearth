<?php
if (nodeIs(SITEHOME))
	variable('welcome-message', replaceItems('Welcome to %JNO%, where we seek to create lives with purpose.' . NEWLINE .
	'<img class="img-fluid mt-3 m-auto d-block" src="%url%%safeName%-logo.png" />' . NEWLINE .
	'<br /><br />See the [%Movements%](%url%movements/BTNOUTLINEINFO) movement from %JNO%.',
		[
			'JNO' => replaceItems('%JNO%', variable('rawReplaces'), '%'),
			'Movements' => '<span class="cursive">' . humanize('movements') . '</span>',
		]
	, '%'));
