<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Raceresults',
	array(
		'RaceResult' => 'list',		
	),
	// non-cacheable actions
	array(		
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Racers',
	array(
		'Racer' => 'list, show',		
	),
	// non-cacheable actions
	array(		
        'Racer' => 'show',		
	)
);

?>