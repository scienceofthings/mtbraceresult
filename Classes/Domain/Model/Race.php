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
class Race extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * location
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $location;

	/**
	 * date
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $date;

	/**
	 * a race belongs to excactly one race series
	 *
	 * @var \Hyneck\Mtbraceresult\Domain\Model\RaceSeries
	 */
	protected $name;

	/**
	 * Returns the location
	 *
	 * @return string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the date
	 *
	 * @return DateTime $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets the date
	 *
	 * @param DateTime $date
	 * @return void
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * Returns the name
	 *
	 * @return \Hyneck\Mtbraceresult\Domain\Model\RaceSeries $name
	 */
	public function getName() {
		return $this->name;
	}
  
  /**
	 * Returns a long description of the race as string
	 *
	 * @return string $nameAndLocation
	 */
	public function getNameAndLocation() {
    $nameAndLocation = '';
    if(isset($this->name)){
      $nameAndLocation .= $this->name->getName();            
    }
    if(isset($this->location)){
      $nameAndLocation .= ' ' . $this->location;
    }
    
		return $nameAndLocation;
	}
  
  /**
	 * Returns a long description of the race as string
	 *
	 * @return string $nameLocationAndDate
	 */
	public function getNameLocationAndDate() {
    $nameLocationAndDate = $this->getNameAndLocation();
    if(isset($this->date)){
      $nameLocationAndDate .= ' ' . $this->date->format('d.m.Y');
    }
    
		return $nameLocationAndDate;
	}

	/**
	 * Sets the name
	 *
	 * @param \Hyneck\Mtbraceresult\Domain\Model\Racesercies $name
	 * @return void
	 */
	public function setName(\Hyneck\Mtbraceresult\Domain\Model\Racesercies $name) {
		$this->name = $name;
	}

}
?>