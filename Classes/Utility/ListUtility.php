<?php
namespace Hyneck\Mtbraceresult\Utility;

class ListUtility{
    
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
        if(!empty($yearsToShow)){
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
