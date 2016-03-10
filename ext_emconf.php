<?php

########################################################################
# Extension Manager/Repository config file for ext "mtbraceresult".
#
# Auto generated 02-04-2012 18:49
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'MTB Race Result',
	'description' => 'With this extension you can insert race results',
	'category' => 'plugin',
	'author' => 'Gregor Hyneck',
	'author_email' => 'gregor@hyneck.de',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:103:{s:21:"ExtensionBuilder.json";s:4:"fbaa";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"657f";s:14:"ext_tables.php";s:4:"5f9c";s:14:"ext_tables.sql";s:4:"a7ba";s:37:"Classes/Controller/RaceController.php";s:4:"4bd5";s:43:"Classes/Controller/RaceResultController.php";s:4:"0c69";s:43:"Classes/Controller/RaceSeriesController.php";s:4:"1a6b";s:38:"Classes/Controller/RacerController.php";s:4:"5351";s:29:"Classes/Domain/Model/Race.php";s:4:"4f44";s:35:"Classes/Domain/Model/RaceResult.php";s:4:"540c";s:35:"Classes/Domain/Model/RaceSeries.php";s:4:"e468";s:30:"Classes/Domain/Model/Racer.php";s:4:"2dd2";s:50:"Classes/Domain/Repository/RaceResultRepository.php";s:4:"4d69";s:45:"Classes/Domain/Repository/RacerRepository.php";s:4:"0c9b";s:39:"Classes/Helper/class.userLabelClass.php";s:4:"e373";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"f75e";s:36:"Configuration/Flexforms/flexform.xml";s:4:"f8c9";s:26:"Configuration/TCA/tx_mtbraceresult_domain_model_race.php";s:4:"90ea";s:32:"Configuration/TCA/tx_mtbraceresult_domain_model_raceresult.php";s:4:"c465";s:32:"Configuration/TCA/RaceSeries.php";s:4:"6431";s:27:"Configuration/TCA/tx_mtbraceresult_domain_model_racer.php";s:4:"7167";s:38:"Configuration/TypoScript/constants.txt";s:4:"d04a";s:34:"Configuration/TypoScript/setup.txt";s:4:"9ca4";s:40:"Resources/Private/Language/locallang.xml";s:4:"c57a";s:79:"Resources/Private/Language/locallang_csh_tx_mtbraceresult_domain_model_race.xml";s:4:"002e";s:80:"Resources/Private/Language/locallang_csh_tx_mtbraceresult_domain_model_racer.xml";s:4:"4bea";s:85:"Resources/Private/Language/locallang_csh_tx_mtbraceresult_domain_model_raceresult.xml";s:4:"bf79";s:85:"Resources/Private/Language/locallang_csh_tx_mtbraceresult_domain_model_raceseries.xml";s:4:"12d3";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"b8a6";s:38:"Resources/Private/Layouts/Default.html";s:4:"474f";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"f8ef";s:53:"Resources/Private/Partials/RaceResult/FormFields.html";s:4:"5df1";s:53:"Resources/Private/Partials/RaceResult/Properties.html";s:4:"6298";s:53:"Resources/Private/Partials/RaceSeries/Properties.html";s:4:"0af8";s:48:"Resources/Private/Partials/Racer/FormFields.html";s:4:"2c1a";s:48:"Resources/Private/Partials/Racer/Properties.html";s:4:"58a1";s:48:"Resources/Private/Templates/RaceResult/Edit.html";s:4:"cf6a";s:48:"Resources/Private/Templates/RaceResult/List.html";s:4:"d8b6";s:47:"Resources/Private/Templates/RaceResult/New.html";s:4:"c84c";s:48:"Resources/Private/Templates/RaceResult/Show.html";s:4:"7435";s:48:"Resources/Private/Templates/RaceSeries/List.html";s:4:"eca4";s:48:"Resources/Private/Templates/RaceSeries/Show.html";s:4:"88a0";s:43:"Resources/Private/Templates/Racer/Edit.html";s:4:"14c8";s:43:"Resources/Private/Templates/Racer/List.html";s:4:"f924";s:42:"Resources/Private/Templates/Racer/New.html";s:4:"2f8b";s:43:"Resources/Private/Templates/Racer/Show.html";s:4:"91e4";s:34:"Resources/Public/Css/demo_page.css";s:4:"6cef";s:35:"Resources/Public/Css/demo_table.css";s:4:"05c3";s:39:"Resources/Public/Css/demo_table_jui.css";s:4:"edcf";s:61:"Resources/Public/Css/ui-lightness/jquery-ui-1.8.16.custom.css";s:4:"fbe5";s:82:"Resources/Public/Css/ui-lightness/images/ui-bg_diagonals-thick_18_b81900_40x40.png";s:4:"95f9";s:82:"Resources/Public/Css/ui-lightness/images/ui-bg_diagonals-thick_20_666666_40x40.png";s:4:"f040";s:72:"Resources/Public/Css/ui-lightness/images/ui-bg_flat_10_000000_40x100.png";s:4:"c18c";s:73:"Resources/Public/Css/ui-lightness/images/ui-bg_glass_100_f6f6f6_1x400.png";s:4:"5f18";s:73:"Resources/Public/Css/ui-lightness/images/ui-bg_glass_100_fdf5ce_1x400.png";s:4:"d26e";s:72:"Resources/Public/Css/ui-lightness/images/ui-bg_glass_65_ffffff_1x400.png";s:4:"e5a8";s:79:"Resources/Public/Css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png";s:4:"58d2";s:82:"Resources/Public/Css/ui-lightness/images/ui-bg_highlight-soft_100_eeeeee_1x100.png";s:4:"384c";s:81:"Resources/Public/Css/ui-lightness/images/ui-bg_highlight-soft_75_ffe45c_1x100.png";s:4:"b806";s:68:"Resources/Public/Css/ui-lightness/images/ui-icons_222222_256x240.png";s:4:"ebe6";s:68:"Resources/Public/Css/ui-lightness/images/ui-icons_228ef1_256x240.png";s:4:"ff17";s:68:"Resources/Public/Css/ui-lightness/images/ui-icons_ef8c08_256x240.png";s:4:"ef9a";s:68:"Resources/Public/Css/ui-lightness/images/ui-icons_ffd27a_256x240.png";s:4:"ab8c";s:68:"Resources/Public/Css/ui-lightness/images/ui-icons_ffffff_256x240.png";s:4:"342b";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:61:"Resources/Public/Icons/tx_mtbraceresult_domain_model_race.gif";s:4:"4e5b";s:62:"Resources/Public/Icons/tx_mtbraceresult_domain_model_racer.gif";s:4:"905a";s:67:"Resources/Public/Icons/tx_mtbraceresult_domain_model_raceresult.gif";s:4:"905a";s:67:"Resources/Public/Icons/tx_mtbraceresult_domain_model_raceseries.gif";s:4:"1103";s:41:"Resources/Public/Images/Sorting icons.psd";s:4:"9c28";s:41:"Resources/Public/Images/back_disabled.jpg";s:4:"723b";s:41:"Resources/Public/Images/back_disabled.png";s:4:"3e52";s:40:"Resources/Public/Images/back_enabled.jpg";s:4:"5d4c";s:40:"Resources/Public/Images/back_enabled.png";s:4:"7f6a";s:36:"Resources/Public/Images/calendar.gif";s:4:"8084";s:36:"Resources/Public/Images/calendar.png";s:4:"d984";s:35:"Resources/Public/Images/favicon.ico";s:4:"c30d";s:44:"Resources/Public/Images/forward_disabled.jpg";s:4:"3cc6";s:44:"Resources/Public/Images/forward_disabled.png";s:4:"9d98";s:43:"Resources/Public/Images/forward_enabled.jpg";s:4:"abc0";s:43:"Resources/Public/Images/forward_enabled.png";s:4:"d131";s:36:"Resources/Public/Images/sort_asc.png";s:4:"8ff0";s:45:"Resources/Public/Images/sort_asc_disabled.png";s:4:"4d77";s:37:"Resources/Public/Images/sort_both.png";s:4:"8c1b";s:37:"Resources/Public/Images/sort_desc.png";s:4:"4919";s:46:"Resources/Public/Images/sort_desc_disabled.png";s:4:"38da";s:35:"Resources/Public/Scripts/de-sort.js";s:4:"20b3";s:55:"Resources/Public/Scripts/jquery-ui-1.8.16.custom.min.js";s:4:"6973";s:45:"Resources/Public/Scripts/jquery.dataTables.js";s:4:"6a9d";s:49:"Resources/Public/Scripts/jquery.dataTables.min.js";s:4:"6147";s:48:"Resources/Public/Scripts/jquery.ui.datepicker.js";s:4:"9cde";s:38:"Resources/Public/Scripts/minMaxDate.js";s:4:"25a4";s:39:"Resources/Public/Scripts/sortMyTable.js";s:4:"8f0e";s:44:"Tests/Unit/Controller/RaceControllerTest.php";s:4:"02f8";s:50:"Tests/Unit/Controller/RaceResultControllerTest.php";s:4:"1242";s:50:"Tests/Unit/Controller/RaceSeriesControllerTest.php";s:4:"51b7";s:45:"Tests/Unit/Controller/RacerControllerTest.php";s:4:"d831";s:42:"Tests/Unit/Domain/Model/RaceResultTest.php";s:4:"c0b8";s:42:"Tests/Unit/Domain/Model/RaceSeriesTest.php";s:4:"9b19";s:36:"Tests/Unit/Domain/Model/RaceTest.php";s:4:"b002";s:37:"Tests/Unit/Domain/Model/RacerTest.php";s:4:"f4d7";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>