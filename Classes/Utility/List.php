<?php

class Tx_Mtbraceresult_Utility_List{
    
    /*
     * @return void
     * Sets CSS and Javascript to $GLOBALS
     */
    public static function injectCssAndJs(){
        //$GLOBALS['TSFE']->getPageRenderer()->addJsFooterInlineCode('effects', '$("h1").hide();');         
        $GLOBALS['TSFE']->getPageRenderer()->addCssFile(
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mtbraceresult') . 
                'Resources/Public/Css/smoothness/jquery-ui-1.10.1.custom.min.css'
                ); 
        $GLOBALS['TSFE']->getPageRenderer()->addCssFile(
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mtbraceresult') . 
                'Resources/Public/Css/datatable.css'
                );         
        
        $GLOBALS['TSFE']->getPageRenderer()->addJsFooterFile(                
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mtbraceresult') .
                'Resources/Public/Scripts/jquery-ui-1.10.1.custom.min.js'
                );                   
        $GLOBALS['TSFE']->getPageRenderer()->addJsFooterFile(                
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mtbraceresult') .
                'Resources/Public/Scripts/jquery.dataTables.min.js'
                ); 
        
        $GLOBALS['TSFE']->getPageRenderer()->addJsFooterFile(                
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mtbraceresult') .
                'Resources/Public/Scripts/sortMyTable.js'
                );                              
    }
    
    /*
     * @ param string $ageClass     
     * @ param array $settings age class setttings of the current year
     * @return array the min and max timestamp
     */
    public static function getMinAndMaxTimeStampByAgeclass($ageClass, $settings){
        $yearsToShow = array();                
        foreach($settings as $year => $ageClassFromSettings){
            if($ageClassFromSettings === $ageClass){
                $yearsToShow[] = intval($year);
            }
        }
        if(is_array($yearsToShow)){
            sort($yearsToShow);
            $minTimestamp = mktime(0,0,0,1,1,$yearsToShow[0]);
            $maxTimestamp = mktime(0,0,0,12,31,$yearsToShow[count($yearsToShow)-1]);
        }        
        
        return array(
            0 => $minTimestamp,
            1 => $maxTimestamp
        );
    }
    
    /*
     * gets the ageclass by the date of Birth
     * 
     * @param int $dateOfBirth The Timestamp of the date of Birth
     * @param array $settings
     */
    public static function getAgeClassByDateOfBirth($dateOfBirth, $settings){        
        return $settings[$dateOfBirth->format('Y')];
    }
}
?>
