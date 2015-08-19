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
class Racer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name of the racere
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * birthday
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $birthday;
  
 /**
	 * ageclass
	 *
	 * @var string	 
	 */
	protected $ageclass;
    
   	/**
	 * portrait
	 *
	 * @var \string
     * @lazy
	 */
	protected $portrait;

	/**
	 * description
	 *
	 * @var \string
	 */
	protected $description;

	/**
	 * event
	 *
	 * @var \string
	 */
	protected $event;


	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the birthday
	 *
	 * @return DateTime $birthday
	 */
	public function getBirthday() {
		return $this->birthday;
	}

	/**
	 * Sets the birthday
	 *
	 * @param DateTime $birthday
	 * @return void
	 */
	public function setBirthday($birthday) {
		$this->birthday = $birthday;
	}
  
  	/**
	 * Returns the birthday
	 *
	 * @return DateTime $birthday
	 */
	public function getAgeclass() {
		return $this->ageclass;
	}

	/**
	 * Sets the birthday
	 *
	 * @param DateTime $birthday
	 * @return void
	 */
	public function setAgeclass($ageclass) {
		$this->ageclass = $ageclass;
	}
    
    /**
	 * Returns the portrait
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $portrait
	 */
	public function getPortrait() {        		
        return $this->portrait;
        //$this->portrait
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $portrait
	 * @return void
	 */
	public function setPortrait($portrait) {
		$this->portrait = $portrait;
	}

	/**
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the event
	 *
	 * @return \string $event
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * Sets the event
	 *
	 * @param \string $event
	 * @return void
	 */
	public function setEvent($event) {
		$this->event = $event;
	}



}
?>