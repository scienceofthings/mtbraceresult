<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Hyneck.' . $_EXTKEY,
	'Raceresults',
	'Race Results'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Hyneck.' . $_EXTKEY,
	'Racers',
	'Racers'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'MTB Race Result');



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mtbraceresult_domain_model_race', 'EXT:mtbraceresult/Resources/Private/Language/locallang_csh_tx_mtbraceresult_domain_model_race.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mtbraceresult_domain_model_race');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mtbraceresult_domain_model_raceresult', 'EXT:mtbraceresult/Resources/Private/Language/locallang_csh_tx_mtbraceresult_domain_model_raceresult.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mtbraceresult_domain_model_raceresult');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mtbraceresult_domain_model_racer', 'EXT:mtbraceresult/Resources/Private/Language/locallang_csh_tx_mtbraceresult_domain_model_racer.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mtbraceresult_domain_model_racer');



require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY).'Classes/Helper/class.userLabelClass.php');
$TCA['tx_mtbraceresult_domain_model_race']['ctrl']['label_userFunc'] =
    'Hyneck\Mtbraceresult\Helper\user_LabelClass->getUserLabelRace';
$TCA['tx_mtbraceresult_domain_model_raceresult']['ctrl']['label_userFunc'] =
    'Hyneck\Mtbraceresult\Helper\user_LabelClass->getUserLabelRaceResult';


// plugin for Race Results
$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_raceresults';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
// integrate xml file
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform.xml');

// plugin for Race Results
$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_racers';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
// integrate xml file
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/racers.xml');

?>