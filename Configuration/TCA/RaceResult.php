<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_mtbraceresult_domain_model_raceresult'] = array(
	'ctrl' => $TCA['tx_mtbraceresult_domain_model_raceresult']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, result, race, racer',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, result, race, racer,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_mtbraceresult_domain_model_raceresult',
				'foreign_table_where' => 'AND tx_mtbraceresult_domain_model_raceresult.pid=###CURRENT_PID### AND tx_mtbraceresult_domain_model_raceresult.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'result' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:mtbraceresult/Resources/Private/Language/locallang_db.xlf:tx_mtbraceresult_domain_model_raceresult.result',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('1.', 1),
          array('2.', 2),
          array('3.', 3),
          array('4.', 4),
          array('5.', 5),
          array('6.', 6),
          array('7.', 7),
          array('8.', 8),
          array('9.', 9),
          array('10.', 10),
          array('11.', 11),
          array('12.', 12),
          array('13.', 13),
          array('14.', 14),
          array('15.', 15),
          array('16.', 16),
          array('17.', 17),
          array('18.', 18),
          array('19.', 19),
          array('20.', 20),            
          array('21.', 21),
          array('22.', 22),
          array('23.', 23),
          array('24.', 24),
          array('25.', 25),
          array('26.', 26),
          array('27.', 27),
          array('28.', 28),
          array('29.', 29),
          array('30.', 30),  
          array('31.', 31),
          array('32.', 32),
          array('33.', 33),
          array('34.', 34),
          array('35.', 35),
          array('36.', 36),
          array('37.', 37),
          array('38.', 38),
          array('39.', 39),
          array('40.', 40),  
          array('41.', 41),
          array('42.', 42),
          array('43.', 43),
          array('44.', 44),
          array('45.', 45),
          array('46.', 46),
          array('47.', 47),
          array('48.', 48),
          array('49.', 49),
          array('50.', 50),  
          array('51.', 51),
          array('52.', 52),
          array('53.', 53),
          array('54.', 54),
          array('55.', 55),
          array('56.', 56),
          array('57.', 57),
          array('58.', 58),
          array('59.', 59),
          array('60.', 60),  
          array('61.', 61),
          array('62.', 62),
          array('63.', 63),
          array('64.', 64),
          array('65.', 65),
          array('66.', 66),
          array('67.', 67),
          array('68.', 68),
          array('69.', 69),
          array('70.', 70),  
          array('71.', 71),
          array('72.', 72),
          array('73.', 73),
          array('74.', 74),
          array('75.', 75),
          array('76.', 76),
          array('77.', 77),
          array('78.', 78),
          array('79.', 79),
          array('80.', 80),  
          array('81.', 81),  
            
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'race' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:mtbraceresult/Resources/Private/Language/locallang_db.xlf:tx_mtbraceresult_domain_model_raceresult.race',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_mtbraceresult_domain_model_race',        
        'foreign_table_where' => 'ORDER BY tx_mtbraceresult_domain_model_race.date DESC',        
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'racer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:mtbraceresult/Resources/Private/Language/locallang_db.xlf:tx_mtbraceresult_domain_model_raceresult.racer',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_mtbraceresult_domain_model_racer',        
        'foreign_table_where' => 'ORDER BY tx_mtbraceresult_domain_model_racer.name ASC',        
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
	),
);
?>