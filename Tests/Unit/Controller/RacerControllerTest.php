<?php
namespace Hyneck\Mtbraceresult\Raceresult\Tests\Raceresult\Tests\Unit\Raceresult\Tests\Unit\Controller;
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
 * Test case for class Tx_Mtbraceresult_Controller_RacerController.
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
class RacerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var Tx_Mtbraceresult_Domain_Model_Racer
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Mtbraceresult_Domain_Model_Racer();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function dummyMethod() {
		$this->markTestIncomplete();
	}

}
?>