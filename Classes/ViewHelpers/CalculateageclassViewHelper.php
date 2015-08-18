<?php

class Tx_Mtbraceresult_ViewHelpers_CalculateageclassViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
 
    /**
     * Reverses the string
     *      
     * @param string $raceResult     
     * @return string
     */
    public function render($raceResult) {
        $settings = $this->templateVariableContainer->get('settings');
        $yearOfBirth = $raceResult->getRacer()->getBirthday()->format('Y');        
        $yearOfRace = $raceResult->getRace()->getDate()->format('Y');
                        
        if(is_array($settings['allocationSeasonToClass'][$yearOfRace])){
            
            // get youngest and oldest age group configured by typoscript
            $youngestAgeGroup = 0;
            $oldestAgeGroup = 3000;                
            foreach($settings['allocationSeasonToClass'][$yearOfRace] as $ageGroup){
                if($ageGroup > $youngestAgeGroup){
                    $youngestAgeGroup = $ageGroup;
                }
                if($ageGroup < $oldestAgeGroup){
                    $oldestAgeGroup = $ageGroup;
                }
            }
            
            // set ageClass or N/A if not available
            if(array_key_exists($yearOfBirth, $settings['allocationSeasonToClass'][$yearOfRace])){
                return $settings['allocationSeasonToClass'][$yearOfRace][$yearOfBirth];
            } else {
                if($yearOfBirth < $oldestAgeGroup){
                    return 'Elite';
                } else  {
                    return 'N/A';
                }
            }            
        } else {
            return 'N/A';
        }
        
 
    }
        
  
}

?>
