<?php
/**
*
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace acme\demo\acp;

class main_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang('acp/common');
		$this->tpl_name = 'body';
		$this->page_title = $user->lang('ACP_MOD_TITLE');
		add_form_key('ssyt/themechanger');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('ssyt/themechanger'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('ssyt_themechanger', $request->variable('ssyt_themechanger', 0));

			trigger_error($user->lang('ACP_MO_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'ACME_DEMO_GOODBYE'		=> $config['ssyt_themechanger'],
		));
	}
}
