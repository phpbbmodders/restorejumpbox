<?php
/**
 * Restore Jumpbox extension for the phpBB Forum Software package
 *
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

$lang = array_merge($lang ?? [], [
	'RESTOREJUMPBOX_NOT_ENABLEABLE' => 'Restore Jumpbox requires phpBB 4.0.0-a2-dev or later in the 4.0 series and PHP 8.2 or later.',
]);
