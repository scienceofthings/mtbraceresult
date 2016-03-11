<?php
namespace Hyneck\Mtbraceresult\Utility;

class ListUtility{
    
    /*
     * Get the first and the last day which is in the ageclass' allow range. E.g.
     *
     * @param string $ageClass
     * @param array $settings age class setttings of the current year
     *
     * @return array the first and the last day which is in the ageclass' allow range
     */
    public static function getBeginAndEndDateForThisAgeclass($ageClass, $settings){
        $yearsToShow = self::getYearsToShow($ageClass, $settings);

        if(!empty($yearsToShow)){
            sort($yearsToShow);
            $beginDate = $yearsToShow[0] . "-1-1";
            $endDate = $yearsToShow[count($yearsToShow)-1] . '12-31';
        }        
        
        return array(
            0 => $beginDate,
            1 => $endDate
        );
    }

    /*
     * Get the years depending on the ageclass from the modules settings.
     * E.g. years 1998 and 1999 for the ageclass U13.
     *
     * @param string $ageClass
     * @param array $settings age class setttings of the current year
     * @return array
     */
    protected static function getYearsToShow($ageClass, $settings)
    {
        $yearsToShow = array();
        foreach($settings as $year => $ageClassFromSettings){
            if($ageClassFromSettings === $ageClass){
                $yearsToShow[] = intval($year);
            }
        }
        return $yearsToShow;
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
