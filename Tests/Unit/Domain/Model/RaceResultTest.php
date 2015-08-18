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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Mtbraceresult_Domain_Model_RaceResult.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage MTB Race Result
 *
 * @author Gregor Hyneck <gregor@hyneck.de>
 */
class Tx_Mtbraceresult_Domain_Model_RaceResultTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Mtbraceresult_Domain_Model_RaceResult
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Mtbraceresult_Domain_Model_RaceResult();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getResultReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getResult()
		);
	}

	/**
	 * @test
	 */
	public function setResultForIntegerSetsResult() { 
		$this->fixture->setResult(12);

		$this->assertSame(
			12,
			$this->fixture->getResult()
		);
	}
	
	/**
	 * @test
	 */
	public function getRaceReturnsInitialValueForTx_Mtbraceresult_Domain_Model_Race() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getRace()
		);
	}

	/**
	 * @test
	 */
	public function setRaceForTx_Mtbraceresult_Domain_Model_RaceSetsRace() { 
		$dummyObject = new Tx_Mtbraceresult_Domain_Model_Race();
		$this->fixture->setRace($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getRace()
		);
	}
	
	/**
	 * @test
	 */
	public function getRacerReturnsInitialValueForTx_Mtbraceresult_Domain_Model_Racer() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getRacer()
		);
	}

	/**
	 * @test
	 */
	public function setRacerForTx_Mtbraceresult_Domain_Model_RacerSetsRacer() { 
		$dummyObject = new Tx_Mtbraceresult_Domain_Model_Racer();
		$this->fixture->setRacer($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getRacer()
		);
	}
	
}
?>