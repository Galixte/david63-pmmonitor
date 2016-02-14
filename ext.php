<?php
/**
*
* @package PM Monitor Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\pmmonitor;

class ext extends \phpbb\extension\base
{
	const PM_MONITOR_VERSION = '2.1.0';

	/**
	* Enable extension if phpBB version requirement is met
	*
	* @var string Require 3.2.0-a1 due to updated 3.2 syntax
	*
	* @return bool
	* @access public
	*/
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return phpbb_version_compare($config['version'], '3.2.0-a1', '>=');
	}
}
