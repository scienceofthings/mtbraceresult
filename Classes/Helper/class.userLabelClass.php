<?php
namespace Hyneck\Mtbraceresult\Helper;

class user_LabelClass {

    function getUserLabelRace(&$params, &$pObj) {
        $uid = $params['row']['uid'];
        $race = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_race', $uid);
        $params['title'] = $race['date']  . ' / ' . $params['row']['location'];
    }

    function getUserLabelRaceResult(&$params, &$pObj) {
        $uid = $params['row']['uid'];
        $raceresult = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_raceresult', $uid);
        $racer = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_racer', $raceresult['racer']);
        $race = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_mtbraceresult_domain_model_race', $raceresult['race']);
        if(isset($racer) && isset($race)){
            $params['title'] = sprintf("%s / %s / %s",
                $racer['name'],
                $race['date'],
                $race['location']
            );
        }
    }

}