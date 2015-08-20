<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Hyneck.' . $_EXTKEY,
	'Raceresults',
	array(
		'RaceResult' => 'list',		
	),
	// non-cacheable actions
	array(		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Hyneck.' . $_EXTKEY,
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