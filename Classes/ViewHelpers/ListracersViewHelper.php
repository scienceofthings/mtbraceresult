<?php
namespace Hyneck\Mtbraceresult\ViewHelpers;

class ListracersViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
 
    /**
     * Reverses the string
     *     
     * @param array of Hyneck\Mtbraceresult\Domain\Model\RaceResult
     * @return array of Hyneck\Mtbraceresult\Domain\Model\Racer
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
