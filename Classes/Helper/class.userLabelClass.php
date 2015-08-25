<?php
namespace Hyneck\Mtbraceresult\Helper;

class user_LabelClass {
    
   function getUserLabelRace(&$params, &$pObj) {
       $uid = $params['row']['uid'];       
       
       // get race
       $race = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_race', $uid);
       $date = \TYPO3\CMS\Backend\Utility\BackendUtility::date($race['date']);       
       
       // get raceseries
       $raceseries = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_raceseries', $race['name']);
       
       if(isset($raceseries)){
           $params['title'] = $raceseries['name'] . ' ' . $params['row']['location'] . ' / ' . $date;
       } else {
           $params['title'] = $params['row']['location'] . ' / ' . $date;
       }
     }

    function getUserLabelRaceResult(&$params, &$pObj) {
       $uid = $params['row']['uid']; 
       $raceresult = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_raceresult', $uid);
       $racer = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_racer', $raceresult['racer']);
       $location = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_race', $raceresult['race']);
       $raceseries = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_raceseries', $location['name']);
       if(isset($racer) && isset($raceseries) && isset($location)){
        $params['title'] = $racer['name'] . ' / ' . $raceseries['name'] . ' ' . $location['location'];
       }
    }
     
}
