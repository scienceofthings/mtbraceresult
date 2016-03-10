<?php
namespace Hyneck\Mtbraceresult\Helper;

class user_LabelClass {
    
   function getUserLabelRace(&$params, &$pObj) {
       $uid = $params['row']['uid'];       
       
       // get race
       $race = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_race', $uid);
       $date = \TYPO3\CMS\Backend\Utility\BackendUtility::date($race['date']);       

       $params['title'] = $params['row']['location'] . ' / ' . $date;
     }

    function getUserLabelRaceResult(&$params, &$pObj) {
       $uid = $params['row']['uid']; 
       $raceresult = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_raceresult', $uid);
       $racer = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_racer', $raceresult['racer']);
       $location = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_race', $raceresult['race']);
       if(isset($racer) && isset($location)){
        $params['title'] = $racer['name'] . $location['location'];
       }
    }
     
}
