<?php
/**
*
* @package PM Monitor Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\pmmonitor\acp;

class pmmonitor_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		$this->tpl_name		= 'pmmonitor';
		$this->page_title	= $user->lang('ACP_PM_MONITOR');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('david63.pmmonitor.admin.controller');

		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);

		$admin_controller->display_output();
	}
}

