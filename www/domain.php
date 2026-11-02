<?php
domain::add('joyfulearth', __DIR__, domain::OnlyThis, new domain([
		'folder' => 'joyfulearth/',
		'heading' => 'JoyfulEarth.org',
		'local' => 'http://localhost/joyfulearth/%subfol%/%site%/',
		'live' => 'https://%site%.joyfulearth.org/',
		'local-base' => 'http://localhost/joyfulearth/%subfol%/',
		'live-base' => 'https://%subfol%.joyfulearth.org/',
	],
	['%folder%www', '%folder%movements/joyism', '%folder%places/india'],
	[
		'places',
		'movements',
		/*TODO: support multiple - like aztras/business
		'people',
		*/
	],
));
