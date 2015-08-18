<?php

class Tx_Mtbraceresult_ViewHelpers_ListracersViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
 
    /**
     * Reverses the string
     *     
     * @param array of Tx_Mtbraceresult_Domain_Model_RaceResult
     * @return
     */
    public function render($raceresults) {                
        $racers = array();
        foreach($raceresults as $raceresult){            
            $racers[] = $raceresult->getRacer()->getName();                
        }
        $racers = array_unique($racers);
        sort($racers);
        return $racers;
 
    }
  
}

?>
