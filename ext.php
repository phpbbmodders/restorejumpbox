<?php
/**
 * Restore Jumpbox extension for the phpBB Forum Software package
 *
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace phpbbmodders\restorejumpbox;

class ext extends \phpbb\extension\base
{
	public function is_enableable(): array|bool
	{
		if (phpbb_version_compare(PHPBB_VERSION, '4.0.0-a2-dev', '>=')
			&& phpbb_version_compare(PHPBB_VERSION, '4.1.0-dev', '<')
			&& version_compare(PHP_VERSION, '8.2.0', '>='))
		{
			return true;
		}

		$language = $this->container->get('language');
		$language->add_lang('install_failed', 'phpbbmodders/restorejumpbox');

		return [$language->lang('RESTOREJUMPBOX_NOT_ENABLEABLE')];
	}
}
