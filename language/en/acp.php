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
	'RESTOREJUMPBOX_VISIBLE' => 'Show the public jumpbox',
	'RESTOREJUMPBOX_VISIBLE_EXPLAIN' => 'Hide the jumpbox from visitors while keeping permission-filtered forum links available to clients such as phpbb-tui.',
]);
