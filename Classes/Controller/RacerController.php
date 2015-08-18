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
class Tx_Mtbraceresult_Controller_RacerController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * racerRepository
	 *
	 * @var Tx_Mtbraceresult_Domain_Repository_RacerRepository
	 */
	protected $racerRepository;

	/**
	 * injectRacerRepository
	 *
	 * @param Tx_Mtbraceresult_Domain_Repository_RacerRepository $racerRepository
	 * @return void
	 */
	public function injectRacerRepository(Tx_Mtbraceresult_Domain_Repository_RacerRepository $racerRepository) {
		$this->racerRepository = $racerRepository;
	}

	
	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		//$racers = $this->racerRepository->findAll();
		                
		$this->view->assign(
            'uploadfolder', 
            $GLOBALS['TCA']['tx_mtbraceresult_domain_model_racer']['columns']['portrait']['config']['uploadfolder']
            );
        $this->view->assign('defaultPortrait', $this->settings['defaultPortrait']);
        $classToShow = $this->settings['show_class'];
        $currentYear = date('Y');
        $timestamps = Tx_Mtbraceresult_Utility_List::getMinAndMaxTimeStampByAgeclass(
                $classToShow, 
                $this->settings['allocationSeasonToClass'][$currentYear]
                );
                
        $racers = $this->racerRepository->findByTimestamps($timestamps);
        $this->view->assign('racers', $racers);
        $this->view->assign('pidDetail', $this->settings['pidDetail']);
        $this->view->assign('pidList', $this->settings['pidList']);                
	}

	

	/**
	 * action show
	 *
	 * @param $racer
	 * @return void
	 */
	public function showAction(Tx_Mtbraceresult_Domain_Model_Racer $racer) {
        $currentYear = date('Y');
		$this->view->assign('racer', $racer);        
		$this->view->assign(
            'uploadfolder', 
            $GLOBALS['TCA']['tx_mtbraceresult_domain_model_racer']['columns']['portrait']['config']['uploadfolder']
            );
        $this->view->assign('pidDetail', $this->settings['pidDetail']);
        $this->view->assign('pidList', $this->settings['pidList']);
        $this->view->assign(
                'ageClass', 
                Tx_Mtbraceresult_Utility_List::getAgeClassByDateOfBirth(
                        $racer->getBirthday(),
                        $this->settings['allocationSeasonToClass'][$currentYear]
                )
        );        
        //$GLOBALS['TSFE']->indexedDocTitle = $racer->getName();
        $GLOBALS['TSFE']->content = ereg_replace('<title>.+<\/title>','<title>'. $racer->getName() .'</title>',$GLOBALS['TSFE']->content);         
	}

}
?>