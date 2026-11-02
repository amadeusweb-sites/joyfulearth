<?php
if (nodeIs(SITEHOME)) {
	variables(['boxes' => true, 'bottom-configured' => true]);

	variable('welcome-message', replaceItems('Welcome to %JNO%, where we seek to create lives with purpose.' . NEWLINE .
	'<img class="img-fluid mt-3 m-auto d-block" src="%url%%safeName%-logo.png" />' . NEWLINE .
	'<br /><br />See the [%Movements%](%url%movements/BTNOUTLINEINFO) movement from %JNO%.',
		[
			'JNO' => (new replacer([]))->replaceAll('%JNO%'),
			'Movements' => '<span class="cursive">' . humanize('movements') . '</span>',
		]
	, '%'));
}
