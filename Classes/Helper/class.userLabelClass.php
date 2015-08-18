<?php
 
class user_LabelClass {
    
   function getUserLabel(&$params, &$pObj) {
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
     
    function getUserLabelRaceresult(&$params, &$pObj) {
       $uid = $params['row']['uid']; 
       $raceresult = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_raceresult', $uid);
       $racer = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_racer', $raceresult['racer']);
       $location = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_race', $raceresult['race']);
       $raceseries = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_raceseries', $location['name']);       
       
       if(isset($raceseries)){
        $params['title'] = $racer['name'] . ' / ' . $raceseries['name'] . ' ' . $location['location'];
       } else {
         $params['title'] = $racer['name']  . ' / ' . $location['location'];
       }       
     }
     
     function getUserLabelRacer(&$params, &$pObj) {
       
        $params['title'] = 'test';
       
     }
     

     
}
