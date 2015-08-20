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
class RaceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action delete
	 *
	 * @param $race
	 * @return void
	 */
	public function deleteAction(\Hyneck\Mtbraceresult\Domain\Model\Race $race) {
		$this->raceRepository->remove($race);
		$this->flashMessageContainer->add('Your Race was removed.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $race
	 * @return void
	 */
	public function editAction(\Hyneck\Mtbraceresult\Domain\Model\Race $race) {
		$this->view->assign('race', $race);
	}

	/**
	 * action update
	 *
	 * @param $race
	 * @return void
	 */
	public function updateAction(\Hyneck\Mtbraceresult\Domain\Model\Race $race) {
		$this->raceRepository->update($race);
		$this->flashMessageContainer->add('Your Race was updated.');
		$this->redirect('list');
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$races = $this->raceRepository->findAll();
		$this->view->assign('races', $races);
	}

	/**
	 * action new
	 *
	 * @param $newRace
	 * @dontvalidate $newRace
	 * @return void
	 */
	public function newAction(\Hyneck\Mtbraceresult\Domain\Model\Race $newRace = NULL) {
		$this->view->assign('newRace', $newRace);
	}

	/**
	 * action create
	 *
	 * @param $newRace
	 * @return void
	 */
	public function createAction(\Hyneck\Mtbraceresult\Domain\Model\Race $newRace) {
		$this->raceRepository->add($newRace);
		$this->flashMessageContainer->add('Your new Race was created.');
		$this->redirect('list');
	}

	/**
	 * action show
	 *
	 * @param $race
	 * @return void
	 */
	public function showAction(\Hyneck\Mtbraceresult\Domain\Model\Race $race) {
		$this->view->assign('race', $race);
	}

}
?>