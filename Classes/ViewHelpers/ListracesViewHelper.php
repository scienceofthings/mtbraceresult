<?php

class Tx_Mtbraceresult_ViewHelpers_ListracesViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
 
    /**
     * Reverses the string
     *     
     * @param array of Tx_Mtbraceresult_Domain_Model_RaceResult
     * @return
     */
    public function render($raceresults) {                
        $races = array();
        foreach($raceresults as $raceresult){
            $races[] = $raceresult->getRace()->getName()->getName() . ' ' . $raceresult->getRace()->getLocation();
                
        }
        $races = array_unique($races);
        sort($races);
        return $races;
 
    }
  
}

?>
