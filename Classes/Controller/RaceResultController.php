<?php
namespace Hyneck\Mtbraceresult\Controller;
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
class RaceResultController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * raceResultRepository
	 *
	 * @var \Hyneck\Mtbraceresult\Domain\Repository\RaceResultRepository
	 */
	protected $raceResultRepository;

	/**
	 * injectRaceResultRepository
	 *
	 * @param \Hyneck\Mtbraceresult\Domain\Repository\RaceResultRepository $raceResultRepository
	 * @return void
	 */
	public function injectRaceResultRepository(\Hyneck\Mtbraceresult\Domain\Repository\RaceResultRepository $raceResultRepository) {
		$this->raceResultRepository = $raceResultRepository;
	}




	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
        // get raceresults with valid racers
		$allRaceResults = $this->raceResultRepository->findAll();
        foreach($allRaceResults as $raceresult){
            if($raceresult->getRacer()){
                $raceResults[] = $raceresult;
            }            
        }
                        
        // path to images
        $pathToImages = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mtbraceresult') .            
            'Resources/Public/Images/';
    
        $this->view->assign('pathToImages', $pathToImages);                
		$this->view->assign('raceResults', $raceResults);
	}





	/**
	 * action show
	 *
	 * @param $raceResult
	 * @return void
	 */
	public function showAction(\Hyneck\Mtbraceresult\Domain\Model\RaceResult $raceResult) {
		$this->view->assign('raceResult', $raceResult);
	}

}
?>