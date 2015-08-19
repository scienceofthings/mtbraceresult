<?php
namespace Hyneck\Mtbraceresult\Domain\Model;
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
class RaceResult extends\TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * result
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $result;

	/**
	 * race
	 *
	 * @var \Hyneck\Mtbraceresult\Domain\Model\Race
	 */
	protected $race;

	/**
	 * racer
	 *
	 * @var \Hyneck\Mtbraceresult\Domain\Model\Racer
	 */
	protected $racer;

	/**
	 * Returns the result
	 *
	 * @return integer $result
	 */
	public function getResult() {
		return $this->result;
	}

	/**
	 * Sets the result
	 *
	 * @param integer $result
	 * @return void
	 */
	public function setResult($result) {
		$this->result = $result;
	}

	/**
	 * Returns the race
	 *
	 * @return \Hyneck\Mtbraceresult\Domain\Model\Race $race
	 */
	public function getRace() {
		return $this->race;
	}
    

	/**
	 * Sets the race
	 *
	 * @param \Hyneck\Mtbraceresult\Domain\Model\Race $race
	 * @return void
	 */
	public function setRace(\Hyneck\Mtbraceresult\Domain\Model\Race $race) {
		$this->race = $race;
	}

	/**
	 * Returns the racer
	 *
	 * @return \Hyneck\Mtbraceresult\Domain\Model\Racer $racer
	 */
	public function getRacer() {
		return $this->racer;
	}

	/**
	 * Sets the racer
	 *
	 * @param \Hyneck\Mtbraceresult\Domain\Model\Racer $racer
	 * @return void
	 */
	public function setRacer(\Hyneck\Mtbraceresult\Domain\Model\Racer $racer) {
		$this->racer = $racer;
	}

}
?>