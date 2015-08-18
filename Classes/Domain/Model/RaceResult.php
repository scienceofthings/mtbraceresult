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
class Tx_Mtbraceresult_Domain_Model_RaceResult extends Tx_Extbase_DomainObject_AbstractEntity {

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
	 * @var Tx_Mtbraceresult_Domain_Model_Race
	 */
	protected $race;

	/**
	 * racer
	 *
	 * @var Tx_Mtbraceresult_Domain_Model_Racer
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
	 * @return Tx_Mtbraceresult_Domain_Model_Race $race
	 */
	public function getRace() {
		return $this->race;
	}
    

	/**
	 * Sets the race
	 *
	 * @param Tx_Mtbraceresult_Domain_Model_Race $race
	 * @return void
	 */
	public function setRace(Tx_Mtbraceresult_Domain_Model_Race $race) {
		$this->race = $race;
	}

	/**
	 * Returns the racer
	 *
	 * @return Tx_Mtbraceresult_Domain_Model_Racer $racer
	 */
	public function getRacer() {
		return $this->racer;
	}

	/**
	 * Sets the racer
	 *
	 * @param Tx_Mtbraceresult_Domain_Model_Racer $racer
	 * @return void
	 */
	public function setRacer(Tx_Mtbraceresult_Domain_Model_Racer $racer) {
		$this->racer = $racer;
	}

}
?>