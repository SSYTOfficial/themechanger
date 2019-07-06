<?php
/**
*
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace ssyt\themechanger\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\ssyt\themechanger\acp\main_module',
			'title'		=> 'ACP_MOD_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_MOD',
					'auth'	=> 'ext_ssyt/themechanger && acl_a_board',
					'cat'	=> array('ACP_MOD_TITLE')
				),

				'groups' 	=> array(
					'title'	=> 'ACP_MOD_GROUPS',
					'auth'	=> 'ext_ssyt/themechanger && acl_a_board',
					'cat'	=> array('ACP_MOD_TITLE')
				)
			),
		);
	}
}
