<?php
//DEFINE('SITENETWORK', 'joyism');

DEFINE('NETWORKPATH', __DIR__);
//DEFINE('NETWORKDATA', __DIR__ . '/main/data/for-network/');
DEFINE('NETWORKMAIN', 'main');

setupSiteVars();

function setupSiteVars() {
	$vars = [];
	$allLinks = true;

	variables($vars);
	if ($allLinks) variables([
		'link-to-section-home' => true,
		'link-to-node-home' => false,
		'link-to-node-home-only-in-directory' => true,
		'link-to-sub-node-home' => true,
		DontOverwriteLogo => true,
	]);

	runFeature('engage'); //needed for floating button
	variables([
		'network' => 'Joyful Earth',
		'mediakit' => '?themecolor=007F0E&content=eed&paler=eec&node=B9D3E4&heading=1BAB29&footer=aac&dont-round-logo=1'
			. '&cursive=Yeseva+One&menu=Eagle+Lake&menu-size=1.1rem',
		'footer-variation' => 'no-widget', //TODO: change when sections / social / SITENETWORK is added
		'rawReplaces' => [
			'JNO' => '<span class="cursive">[Joyist Nation Organizations](%urlOf-joyfulearth%about-jno/BTNOUTLINEINFO)</span>',
			'JoyfulEarth' => '<span class="cursive">[JE](%urlOf-joyfulearth%)</span>',
			'DrYaseva' => '<span class="cursive">[Dr Yaseva, Founder](%urlOf-yaseva%BTNOUTLINEWARNING)</span>',
			'Joyism' => '<span class="cursive">[The Joyism Movement](%urlOf-joyism%)</span>',

			'GoGreen' => '<span class="cursive">[GO Green](%urlOf-joyfulearth%climate-change/programs/go-green/)</span>',
			'Joy-Archy' => '<span class="cursive">[Joy-Archy](%urlOf-joyfulearth%governance/about/joyarchy--ultimate-participative-rule/)</span>',
			'AYUSH+' => '<span class="cursive">[AYUSH+](#%urlOf-joyfulearth%/wellbeing/programs/ayush-plus/)</span>',
			//'' => '<span class="cursive">[](%urlOf-%)</span>',
		],
		'below-countdown' => 'The **life\'s work** of %DrYaseva% &rarr; %JNO% is set to launch on [Jan 26th 2026](%urlOf-joyfulearth%calendar/BTNSITE)',
		'countdown-params' => 'data-year="2026" data-month="1" data-day="26"  data-hour="12" data-minute="00" data-format="dHMS"',
	]);
}

function after_footer_assets() {
	//TODO: HIGH: echo getThemeSnippet('floating-button');
}
