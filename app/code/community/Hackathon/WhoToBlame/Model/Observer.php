<?php
/**
 * Hackathon_WhoToBlame extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category	Hackathon
 * @package		Hackathon_WhoToBlame
 * @copyright	Copyright © 2013 TRITUM GmbH ( http://www.tritum.de )
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Observer Model
 *
 * @category	Hackathon
 * @package		Hackathon_WhoToBlame
 * @subpackage	Model
 * @author		Sebastian Wagner <sebastian.wagner@tritum.de>
 * @since		0.1.0
 */
class Hackathon_WhoToBlame_Model_Observer
	extends Hackathon_WhoToBlame_Model_Observer_Common
{

	/**
	 * @param Varien_Event_Observer $observer
	 * @return Hackathon_WhoToBlame_Model_Observer
	 */
	public function eventToListenTo(Varien_Event_Observer $observer)
	{
		if($observer && $this->isEnabled()) {
			
		}
		return $this;
	}


}
