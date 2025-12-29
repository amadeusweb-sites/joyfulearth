<?php
//DEFINE('SITENETWORK', 'joyism');

DEFINE('NETWORKPATH', __DIR__);
DEFINE('NETWORKDATA', __DIR__ . '/main/data/for-network/');
DEFINE('NETWORKMAIN', 'main');

setupSiteVars();

function setupSiteVars() {
	$vars = [];
	$allLinks = true;

	variables($vars);
	if ($allLinks) variables([
		'link-to-section-home' => true,
		'link-to-node-home' => true,
		'link-to-sub-node-home' => true,
	]);

	runFeature('engage'); //needed for floating button
	variables([
		'network' => 'Joyful Earth',
		'mediakit' => '?themecolor=007F0E&content=eed&paler=eec&node=B9D3E4&heading=1BAB29&footer=aac&dont-round-logo=1'
			. '&cursive=Yeseva+One&menu=Eagle+Lake&menu-size=1.1rem',
		'footer-variation' => 'no-widget', //TODO: change when sections / social / SITENETWORK is added
		'rawReplaces' => [
			'JoyfulEarth' => '<span class="cursive">[JE](%urlOf-joyfulearth%)</span>',
			'Yaseva' => '<span class="cursive">[Yaseva](%urlOf-yaseva%)</span>',
			'Joyism' => '<span class="cursive">[The Joyism Movement](%urlOf-joyism%)</span>',
			'GoGreen' => '<span class="cursive">[GO Green](%urlOf-joyfulearth%climate-change/programs/go-green/)</span>',
			'AYUSH+' => '<span class="cursive">[AYUSH+](#%urlOf-joyfulearth%/wellbeing/programs/ayush-plus/)</span>',
			'JNO' => '<span class="cursive">[Joyist Nation Organization](%urlOf-joyfulearth%about-jno/)</span>',
			//'' => '<span class="cursive">[](%urlOf-%)</span>',
		],
		'below-countdown' => 'The **life\'s work** of %Yaseva%, &mdash; %JNO% is set to launch on [Oct 2nd 2025](%url%press/BTNSITE).',
		'countdown-params' => 'data-year="2025" data-month="10" data-day="2"  data-hour="12" data-minute="00" data-format="dHMS"',
	]);
}

function after_footer_assets() {
	//TODO: HIGH: echo getThemeSnippet('floating-button');
}
