<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Gregor Hyneck <gregor@hyneck.de>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package mtbraceresult
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Mtbraceresult_Domain_Repository_RacerRepository extends Tx_Extbase_Persistence_Repository {
    
    /**
     * Find Racers only with this date of birth
     *
     * @param array $timestamps Maximum DateOfBirth     
     * @return Tx_Extbase_Persistence_QueryResultInterface
     */
    public function findByTimestamps($timestamps) {                
        $minTimestamp = $timestamps[0];
        $maxTimestamp = $timestamps[1];                          
        $query = $this->createQuery();        
        $query->matching(
            $query->logicalAnd(
                $query->greaterThanOrEqual('birthday',$minTimestamp),
                $query->lessThanOrEqual('birthday',$maxTimestamp)              
            )
        );
        
        return $query->execute();
    }
    

}
?>