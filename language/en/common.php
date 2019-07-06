<?php
/**
*
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'DEMO_PAGE'			=> 'Demo',
	'DEMO_HELLO'		=> 'Hello %s!',
	'DEMO_GOODBYE'		=> 'Goodbye %s!',

	'ACP_MOD_TITLE'			    => 'Theme Changer',
	'ACP_MOD'					=> 'Settings',
	'ACP_MOD_GROUPS'			=> 'Groups',
	'ACP_MOD_GOODBYE'			=> 'Activate Module?',
	'ACP_MOD_SETTING_SAVED'	    => 'Settings have been saved successfully!',
));
