<?php
namespace Hyneck\Raceresult\Controller;
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
class RaceSeriesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action delete
	 *
	 * @param \Hyneck\Mtbraceresult\Domain\Model\RaceSeries $raceSeries
	 * @return void
	 */
	public function deleteAction(\Hyneck\Mtbraceresult\Domain\Model\RaceSeries $raceSeries) {
		$this->raceSeriesRepository->remove($raceSeries);
		$this->flashMessageContainer->add('Your RaceSeries was removed.');
		$this->redirect('list');
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$raceSeries = $this->raceSeriesRepository->findAll();
		$this->view->assign('raceSeries', $raceSeries);
	}

	/**
	 * action show
	 *
	 * @param \Hyneck\Mtbraceresult\Domain\Model\RaceSeries $raceSeries
	 * @return void
	 */
	public function showAction(\Hyneck\Mtbraceresult\Domain\Model\RaceSeries $raceSeries) {
		$this->view->assign('raceSeries', $raceSeries);
	}

}
?>