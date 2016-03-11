<?php
namespace Hyneck\Mtbraceresult\ViewHelpers;

class ListracesViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
 
    /**
     * Reverses the string
     *     
     * @param array of Tx_Mtbraceresult_Domain_Model_RaceResult
     * @return
     */
    public function render($raceresults) {                
        $races = array();
        foreach($raceresults as $raceresult){
            $races[] = $raceresult->getRace()->getName() . ' ' . $raceresult->getRace()->getLocation();
                
        }
        $races = array_unique($races);
        sort($races);
        return $races;
 
    }
  
}

?>
