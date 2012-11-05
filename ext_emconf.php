<?php

########################################################################
# Extension Manager/Repository config file for ext "sr_freecap".
#
# Auto generated 18-03-2012 13:37
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'freeCap CAPTCHA',
	'description' => 'A TYPO3 integration of freeCap CAPTCHA.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.5.3',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Stanislas Rolland',
	'author_email' => 'typo3(arobas)sjbr.ca',
	'author_company' => 'SJBR',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:340:{s:11:"COPYING.txt";s:4:"393a";s:9:"ChangeLog";s:4:"a57b";s:12:"ext_icon.gif";s:4:"687c";s:17:"ext_localconf.php";s:4:"3324";s:14:"ext_tables.php";s:4:"8a25";s:28:"ext_typoscript_constants.txt";s:4:"3b0b";s:24:"ext_typoscript_setup.txt";s:4:"13ac";s:14:"doc/manual.sxw";s:4:"a479";s:17:"doc/ru/manual.sxw";s:4:"dfdc";s:37:"mod1/class.tx_srfreecap_fontmaker.php";s:4:"266a";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"4104";s:18:"mod1/fontmaker.php";s:4:"a4eb";s:14:"mod1/index.php";s:4:"a293";s:18:"mod1/locallang.xml";s:4:"7823";s:22:"mod1/locallang_mod.xml";s:4:"8fd5";s:19:"mod1/moduleicon.gif";s:4:"687c";s:15:"pi1/captcha.php";s:4:"b576";s:30:"pi1/class.tx_srfreecap_pi1.php";s:4:"bcac";s:18:"pi1/freecap141.php";s:4:"30df";s:17:"pi1/locallang.xml";s:4:"1e2c";s:30:"pi2/class.tx_srfreecap_pi2.php";s:4:"f47a";s:14:"pi2/freeCap.js";s:4:"fa5c";s:17:"pi2/locallang.xml";s:4:"3b52";s:20:"pi3/audioCaptcha.php";s:4:"c16a";s:30:"pi3/class.tx_srfreecap_pi3.php";s:4:"384d";s:24:"res/fonts/.anonymous.gdf";s:4:"ec47";s:40:"res/fonts/.ht_freecap_extended_font1.gdf";s:4:"3665";s:40:"res/fonts/.ht_freecap_extended_font2.gdf";s:4:"6237";s:40:"res/fonts/.ht_freecap_extended_font3.gdf";s:4:"e894";s:40:"res/fonts/.ht_freecap_extended_font4.gdf";s:4:"9c66";s:31:"res/fonts/.ht_freecap_font1.gdf";s:4:"2d89";s:31:"res/fonts/.ht_freecap_font2.gdf";s:4:"da7e";s:31:"res/fonts/.ht_freecap_font3.gdf";s:4:"6f97";s:31:"res/fonts/.ht_freecap_font4.gdf";s:4:"dc3d";s:31:"res/fonts/.ht_freecap_font5.gdf";s:4:"f0ef";s:30:"res/images/.ht_freecap_im1.jpg";s:4:"80e6";s:30:"res/images/.ht_freecap_im2.jpg";s:4:"743c";s:30:"res/images/.ht_freecap_im3.jpg";s:4:"60b2";s:30:"res/images/.ht_freecap_im4.jpg";s:4:"780f";s:30:"res/images/.ht_freecap_im5.jpg";s:4:"9bcf";s:20:"res/images/audio.png";s:4:"c244";s:19:"res/voices/de/0.wav";s:4:"4a9d";s:19:"res/voices/de/1.wav";s:4:"a615";s:19:"res/voices/de/2.wav";s:4:"0bda";s:19:"res/voices/de/3.wav";s:4:"19a7";s:19:"res/voices/de/4.wav";s:4:"5d36";s:19:"res/voices/de/5.wav";s:4:"489b";s:19:"res/voices/de/6.wav";s:4:"12e6";s:19:"res/voices/de/7.wav";s:4:"e21d";s:19:"res/voices/de/8.wav";s:4:"ead7";s:19:"res/voices/de/9.wav";s:4:"30fe";s:19:"res/voices/de/a.wav";s:4:"dcea";s:19:"res/voices/de/b.wav";s:4:"23b5";s:19:"res/voices/de/c.wav";s:4:"18ef";s:19:"res/voices/de/d.wav";s:4:"9238";s:19:"res/voices/de/e.wav";s:4:"14f2";s:19:"res/voices/de/f.wav";s:4:"aa99";s:19:"res/voices/de/g.wav";s:4:"5ea0";s:19:"res/voices/de/h.wav";s:4:"dbac";s:19:"res/voices/de/i.wav";s:4:"dd8a";s:19:"res/voices/de/j.wav";s:4:"c417";s:19:"res/voices/de/k.wav";s:4:"8703";s:19:"res/voices/de/l.wav";s:4:"687c";s:19:"res/voices/de/m.wav";s:4:"79f6";s:19:"res/voices/de/n.wav";s:4:"4ce2";s:19:"res/voices/de/o.wav";s:4:"0cff";s:19:"res/voices/de/p.wav";s:4:"b4f9";s:19:"res/voices/de/q.wav";s:4:"3cae";s:19:"res/voices/de/r.wav";s:4:"8a0c";s:19:"res/voices/de/s.wav";s:4:"9287";s:19:"res/voices/de/t.wav";s:4:"1968";s:19:"res/voices/de/u.wav";s:4:"7888";s:19:"res/voices/de/v.wav";s:4:"e20e";s:19:"res/voices/de/w.wav";s:4:"4d7f";s:19:"res/voices/de/x.wav";s:4:"85e5";s:19:"res/voices/de/y.wav";s:4:"86a5";s:19:"res/voices/de/z.wav";s:4:"d0cf";s:20:"res/voices/de/ß.wav";s:4:"2b6e";s:20:"res/voices/de/ä.wav";s:4:"de30";s:20:"res/voices/de/ö.wav";s:4:"5db4";s:20:"res/voices/de/ü.wav";s:4:"17fb";s:19:"res/voices/de/�.wav";s:4:"2b6e";s:19:"res/voices/de/�.wav";s:4:"de30";s:19:"res/voices/de/�.wav";s:4:"5db4";s:19:"res/voices/de/�.wav";s:4:"17fb";s:24:"res/voices/default/0.wav";s:4:"e725";s:24:"res/voices/default/1.wav";s:4:"2f6a";s:24:"res/voices/default/2.wav";s:4:"fb53";s:24:"res/voices/default/3.wav";s:4:"a774";s:24:"res/voices/default/4.wav";s:4:"1a97";s:24:"res/voices/default/5.wav";s:4:"24ce";s:24:"res/voices/default/6.wav";s:4:"fe02";s:24:"res/voices/default/7.wav";s:4:"d7b6";s:24:"res/voices/default/8.wav";s:4:"1186";s:24:"res/voices/default/9.wav";s:4:"790c";s:24:"res/voices/default/a.wav";s:4:"7a27";s:24:"res/voices/default/b.wav";s:4:"6931";s:24:"res/voices/default/c.wav";s:4:"6364";s:24:"res/voices/default/d.wav";s:4:"7b55";s:24:"res/voices/default/e.wav";s:4:"9efe";s:24:"res/voices/default/f.wav";s:4:"ed53";s:24:"res/voices/default/g.wav";s:4:"062e";s:24:"res/voices/default/h.wav";s:4:"4b6e";s:24:"res/voices/default/i.wav";s:4:"42aa";s:24:"res/voices/default/j.wav";s:4:"6d64";s:24:"res/voices/default/k.wav";s:4:"bd50";s:24:"res/voices/default/l.wav";s:4:"fdf9";s:24:"res/voices/default/m.wav";s:4:"9c18";s:24:"res/voices/default/n.wav";s:4:"ba4a";s:24:"res/voices/default/o.wav";s:4:"6a6f";s:24:"res/voices/default/p.wav";s:4:"41d9";s:24:"res/voices/default/q.wav";s:4:"1b19";s:24:"res/voices/default/r.wav";s:4:"762a";s:24:"res/voices/default/s.wav";s:4:"ba07";s:24:"res/voices/default/t.wav";s:4:"7640";s:24:"res/voices/default/u.wav";s:4:"f861";s:24:"res/voices/default/v.wav";s:4:"ade1";s:24:"res/voices/default/w.wav";s:4:"4c38";s:24:"res/voices/default/x.wav";s:4:"5ad3";s:24:"res/voices/default/y.wav";s:4:"616e";s:24:"res/voices/default/z.wav";s:4:"1d8b";s:19:"res/voices/es/0.wav";s:4:"db49";s:19:"res/voices/es/1.wav";s:4:"853c";s:19:"res/voices/es/2.wav";s:4:"cda1";s:19:"res/voices/es/3.wav";s:4:"f164";s:19:"res/voices/es/4.wav";s:4:"857a";s:19:"res/voices/es/5.wav";s:4:"5ad0";s:19:"res/voices/es/6.wav";s:4:"eb6e";s:19:"res/voices/es/7.wav";s:4:"961a";s:19:"res/voices/es/8.wav";s:4:"237b";s:19:"res/voices/es/9.wav";s:4:"c7d8";s:19:"res/voices/es/a.wav";s:4:"e0a0";s:19:"res/voices/es/b.wav";s:4:"dece";s:19:"res/voices/es/c.wav";s:4:"6905";s:19:"res/voices/es/d.wav";s:4:"e647";s:19:"res/voices/es/e.wav";s:4:"05fb";s:19:"res/voices/es/f.wav";s:4:"fa24";s:19:"res/voices/es/g.wav";s:4:"00fe";s:19:"res/voices/es/h.wav";s:4:"b284";s:19:"res/voices/es/i.wav";s:4:"ec3f";s:19:"res/voices/es/j.wav";s:4:"02c0";s:19:"res/voices/es/k.wav";s:4:"7007";s:19:"res/voices/es/l.wav";s:4:"3ac7";s:19:"res/voices/es/m.wav";s:4:"546b";s:19:"res/voices/es/n.wav";s:4:"12c9";s:19:"res/voices/es/o.wav";s:4:"1582";s:19:"res/voices/es/p.wav";s:4:"99b5";s:19:"res/voices/es/q.wav";s:4:"c53f";s:19:"res/voices/es/r.wav";s:4:"1b97";s:19:"res/voices/es/s.wav";s:4:"72c0";s:19:"res/voices/es/t.wav";s:4:"7962";s:19:"res/voices/es/u.wav";s:4:"e466";s:19:"res/voices/es/v.wav";s:4:"a915";s:19:"res/voices/es/w.wav";s:4:"3d1d";s:19:"res/voices/es/x.wav";s:4:"b80d";s:19:"res/voices/es/y.wav";s:4:"ec3f";s:19:"res/voices/es/z.wav";s:4:"cd9b";s:20:"res/voices/es/á.wav";s:4:"7337";s:20:"res/voices/es/é.wav";s:4:"fa97";s:20:"res/voices/es/í.wav";s:4:"6210";s:20:"res/voices/es/ñ.wav";s:4:"617e";s:20:"res/voices/es/ó.wav";s:4:"c3d8";s:20:"res/voices/es/ú.wav";s:4:"b552";s:20:"res/voices/es/ü.wav";s:4:"dbf4";s:19:"res/voices/es/�.wav";s:4:"7337";s:19:"res/voices/es/�.wav";s:4:"fa97";s:19:"res/voices/es/�.wav";s:4:"6210";s:19:"res/voices/es/�.wav";s:4:"617e";s:19:"res/voices/es/�.wav";s:4:"c3d8";s:19:"res/voices/es/�.wav";s:4:"b552";s:19:"res/voices/es/�.wav";s:4:"dbf4";s:19:"res/voices/fr/0.wav";s:4:"d0c4";s:19:"res/voices/fr/1.wav";s:4:"4d11";s:19:"res/voices/fr/2.wav";s:4:"95a1";s:19:"res/voices/fr/3.wav";s:4:"d706";s:19:"res/voices/fr/4.wav";s:4:"d03d";s:19:"res/voices/fr/5.wav";s:4:"49aa";s:19:"res/voices/fr/6.wav";s:4:"1d18";s:19:"res/voices/fr/7.wav";s:4:"77d3";s:19:"res/voices/fr/8.wav";s:4:"b999";s:19:"res/voices/fr/9.wav";s:4:"fb70";s:19:"res/voices/fr/a.wav";s:4:"0a4d";s:19:"res/voices/fr/b.wav";s:4:"021b";s:19:"res/voices/fr/c.wav";s:4:"a096";s:19:"res/voices/fr/d.wav";s:4:"437b";s:19:"res/voices/fr/e.wav";s:4:"3f25";s:19:"res/voices/fr/f.wav";s:4:"1c04";s:19:"res/voices/fr/g.wav";s:4:"e823";s:19:"res/voices/fr/h.wav";s:4:"3759";s:19:"res/voices/fr/i.wav";s:4:"80cb";s:19:"res/voices/fr/j.wav";s:4:"bc1d";s:19:"res/voices/fr/k.wav";s:4:"c029";s:19:"res/voices/fr/l.wav";s:4:"0592";s:19:"res/voices/fr/m.wav";s:4:"644d";s:19:"res/voices/fr/n.wav";s:4:"c5b8";s:19:"res/voices/fr/o.wav";s:4:"282b";s:19:"res/voices/fr/p.wav";s:4:"e05c";s:19:"res/voices/fr/q.wav";s:4:"9136";s:19:"res/voices/fr/r.wav";s:4:"3fe2";s:19:"res/voices/fr/s.wav";s:4:"547c";s:19:"res/voices/fr/t.wav";s:4:"9514";s:19:"res/voices/fr/u.wav";s:4:"6282";s:19:"res/voices/fr/v.wav";s:4:"5aca";s:19:"res/voices/fr/w.wav";s:4:"ff68";s:19:"res/voices/fr/x.wav";s:4:"4ab5";s:19:"res/voices/fr/y.wav";s:4:"f045";s:19:"res/voices/fr/z.wav";s:4:"2116";s:20:"res/voices/fr/à.wav";s:4:"9788";s:20:"res/voices/fr/â.wav";s:4:"9630";s:20:"res/voices/fr/ä.wav";s:4:"0a4d";s:20:"res/voices/fr/ç.wav";s:4:"be88";s:20:"res/voices/fr/è.wav";s:4:"be97";s:20:"res/voices/fr/é.wav";s:4:"30c0";s:20:"res/voices/fr/ê.wav";s:4:"642e";s:20:"res/voices/fr/ë.wav";s:4:"3c49";s:20:"res/voices/fr/î.wav";s:4:"a810";s:20:"res/voices/fr/ï.wav";s:4:"c732";s:20:"res/voices/fr/ô.wav";s:4:"80e1";s:20:"res/voices/fr/ö.wav";s:4:"9136";s:20:"res/voices/fr/û.wav";s:4:"b097";s:20:"res/voices/fr/ü.wav";s:4:"bad2";s:19:"res/voices/fr/�.wav";s:4:"9788";s:19:"res/voices/fr/�.wav";s:4:"9630";s:19:"res/voices/fr/�.wav";s:4:"0a4d";s:19:"res/voices/fr/�.wav";s:4:"be88";s:19:"res/voices/fr/�.wav";s:4:"be97";s:19:"res/voices/fr/�.wav";s:4:"30c0";s:19:"res/voices/fr/�.wav";s:4:"642e";s:19:"res/voices/fr/�.wav";s:4:"3c49";s:19:"res/voices/fr/�.wav";s:4:"a810";s:19:"res/voices/fr/�.wav";s:4:"c732";s:19:"res/voices/fr/�.wav";s:4:"80e1";s:19:"res/voices/fr/�.wav";s:4:"9136";s:19:"res/voices/fr/�.wav";s:4:"b097";s:19:"res/voices/fr/�.wav";s:4:"bad2";s:19:"res/voices/it/0.wav";s:4:"89d3";s:19:"res/voices/it/1.wav";s:4:"9b12";s:19:"res/voices/it/2.wav";s:4:"628f";s:19:"res/voices/it/3.wav";s:4:"beaa";s:19:"res/voices/it/4.wav";s:4:"a72b";s:19:"res/voices/it/5.wav";s:4:"ad59";s:19:"res/voices/it/6.wav";s:4:"ea89";s:19:"res/voices/it/7.wav";s:4:"9a02";s:19:"res/voices/it/8.wav";s:4:"9471";s:19:"res/voices/it/9.wav";s:4:"2a43";s:19:"res/voices/it/a.wav";s:4:"e2bf";s:19:"res/voices/it/b.wav";s:4:"f77e";s:19:"res/voices/it/c.wav";s:4:"bf0a";s:19:"res/voices/it/d.wav";s:4:"ea6c";s:19:"res/voices/it/e.wav";s:4:"fd73";s:19:"res/voices/it/f.wav";s:4:"1b01";s:19:"res/voices/it/g.wav";s:4:"e2af";s:19:"res/voices/it/h.wav";s:4:"f3df";s:19:"res/voices/it/i.wav";s:4:"ef14";s:19:"res/voices/it/j.wav";s:4:"4ed2";s:19:"res/voices/it/k.wav";s:4:"f0f2";s:19:"res/voices/it/l.wav";s:4:"1ea5";s:19:"res/voices/it/m.wav";s:4:"eec4";s:19:"res/voices/it/n.wav";s:4:"d94f";s:19:"res/voices/it/o.wav";s:4:"bc95";s:19:"res/voices/it/p.wav";s:4:"6d8d";s:19:"res/voices/it/q.wav";s:4:"fb7c";s:19:"res/voices/it/r.wav";s:4:"4148";s:19:"res/voices/it/s.wav";s:4:"dcb7";s:19:"res/voices/it/t.wav";s:4:"08ad";s:19:"res/voices/it/u.wav";s:4:"2d83";s:19:"res/voices/it/v.wav";s:4:"d807";s:19:"res/voices/it/w.wav";s:4:"c00d";s:19:"res/voices/it/x.wav";s:4:"a27b";s:19:"res/voices/it/y.wav";s:4:"7d90";s:19:"res/voices/it/z.wav";s:4:"0d8f";s:20:"res/voices/it/à.wav";s:4:"3bfc";s:20:"res/voices/it/è.wav";s:4:"6a5b";s:20:"res/voices/it/é.wav";s:4:"0664";s:20:"res/voices/it/ò.wav";s:4:"aed2";s:19:"res/voices/it/�.wav";s:4:"3bfc";s:19:"res/voices/it/�.wav";s:4:"6a5b";s:19:"res/voices/it/�.wav";s:4:"0664";s:19:"res/voices/it/�.wav";s:4:"aed2";s:19:"res/voices/pt/0.wav";s:4:"b932";s:19:"res/voices/pt/1.wav";s:4:"7a87";s:19:"res/voices/pt/2.wav";s:4:"656a";s:19:"res/voices/pt/3.wav";s:4:"7cdb";s:19:"res/voices/pt/4.wav";s:4:"7c14";s:19:"res/voices/pt/5.wav";s:4:"10aa";s:19:"res/voices/pt/6.wav";s:4:"eb25";s:19:"res/voices/pt/7.wav";s:4:"f6e3";s:19:"res/voices/pt/8.wav";s:4:"87f0";s:19:"res/voices/pt/9.wav";s:4:"d301";s:19:"res/voices/pt/a.wav";s:4:"8fc0";s:19:"res/voices/pt/b.wav";s:4:"ad53";s:19:"res/voices/pt/c.wav";s:4:"0b7e";s:19:"res/voices/pt/d.wav";s:4:"8fe5";s:19:"res/voices/pt/e.wav";s:4:"29e7";s:19:"res/voices/pt/f.wav";s:4:"834b";s:19:"res/voices/pt/g.wav";s:4:"7a4c";s:19:"res/voices/pt/h.wav";s:4:"e218";s:19:"res/voices/pt/i.wav";s:4:"cbba";s:19:"res/voices/pt/j.wav";s:4:"e214";s:19:"res/voices/pt/k.wav";s:4:"855b";s:19:"res/voices/pt/l.wav";s:4:"ca9f";s:19:"res/voices/pt/m.wav";s:4:"7713";s:19:"res/voices/pt/n.wav";s:4:"bdbe";s:19:"res/voices/pt/o.wav";s:4:"8d74";s:19:"res/voices/pt/p.wav";s:4:"cc66";s:19:"res/voices/pt/q.wav";s:4:"2502";s:19:"res/voices/pt/r.wav";s:4:"a6d9";s:19:"res/voices/pt/s.wav";s:4:"f20d";s:19:"res/voices/pt/t.wav";s:4:"8e0f";s:19:"res/voices/pt/u.wav";s:4:"ac80";s:19:"res/voices/pt/v.wav";s:4:"7836";s:19:"res/voices/pt/w.wav";s:4:"5457";s:19:"res/voices/pt/x.wav";s:4:"d8aa";s:19:"res/voices/pt/y.wav";s:4:"9ee3";s:19:"res/voices/pt/z.wav";s:4:"0ace";s:20:"res/voices/pt/à.wav";s:4:"8fc0";s:20:"res/voices/pt/á.wav";s:4:"be8b";s:20:"res/voices/pt/ã.wav";s:4:"3613";s:20:"res/voices/pt/ç.wav";s:4:"6fef";s:20:"res/voices/pt/é.wav";s:4:"29e7";s:20:"res/voices/pt/ê.wav";s:4:"b316";s:20:"res/voices/pt/í.wav";s:4:"42c1";s:20:"res/voices/pt/ó.wav";s:4:"4418";s:20:"res/voices/pt/õ.wav";s:4:"3192";s:20:"res/voices/pt/ú.wav";s:4:"4a29";s:19:"res/voices/pt/�.wav";s:4:"8fc0";s:19:"res/voices/pt/�.wav";s:4:"be8b";s:19:"res/voices/pt/�.wav";s:4:"3613";s:19:"res/voices/pt/�.wav";s:4:"6fef";s:19:"res/voices/pt/�.wav";s:4:"29e7";s:19:"res/voices/pt/�.wav";s:4:"b316";s:19:"res/voices/pt/�.wav";s:4:"42c1";s:19:"res/voices/pt/�.wav";s:4:"4418";s:19:"res/voices/pt/�.wav";s:4:"3192";s:19:"res/voices/pt/�.wav";s:4:"4a29";s:30:"res/words/.ht_de_freecap_words";s:4:"4c5e";s:35:"res/words/.ht_default_freecap_words";s:4:"7d93";s:30:"res/words/.ht_fr_freecap_words";s:4:"71de";s:30:"res/words/.ht_tr_freecap_words";s:4:"0345";}',
	'suggests' => array(
	),
);

?>