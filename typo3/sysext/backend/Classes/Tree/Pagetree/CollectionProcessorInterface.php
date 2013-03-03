<?php
namespace TYPO3\CMS\Backend\Tree\Pagetree;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Tolleiv Nietsch <typo3@tolleiv.de>
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
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Interface for classes which perform pre or post processing
 *
 * @author Tolleiv Nietsch <typo3@tolleiv.de>
 */
interface CollectionProcessorInterface
{
	/**
	 * Post process the subelement collection of a specific node
	 *
	 * @abstract
	 * @param \TYPO3\CMS\Backend\Tree\Pagetree\PagetreeNode $node
	 * @param integer $mountPoint
	 * @param integer $level
	 * @param \TYPO3\CMS\Backend\Tree\Pagetree\PagetreeNodeCollection $nodeCollection
	 * @return void
	 */
	public function postProcessGetNodes($node, $mountPoint, $level, $nodeCollection);

	/**
	 * Post process the subelement collection of a specific node-filter combination
	 *
	 * @abstract
	 * @param \TYPO3\CMS\Backend\Tree\Pagetree\PagetreeNode $node
	 * @param string $searchFilter
	 * @param integer $mountPoint
	 * @param \TYPO3\CMS\Backend\Tree\Pagetree\PagetreeNodeCollection $nodeCollection
	 * @return void
	 */
	public function postProcessFilteredNodes($node, $searchFilter, $mountPoint, $nodeCollection);

	/**
	 * Post process the collection of tree mounts
	 *
	 * @abstract
	 * @param string $searchFilter
	 * @param \TYPO3\CMS\Backend\Tree\Pagetree\PagetreeNodeCollection $nodeCollection
	 * @return void
	 */
	public function postProcessGetTreeMounts($searchFilter, $nodeCollection);

}

?>