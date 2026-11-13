<?php
/**
 * Restore Jumpbox extension for the phpBB Forum Software package
 *
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace phpbbmodders\restorejumpbox\migrations;

class add_visibility_setting extends \phpbb\db\migration\migration
{
	public static function depends_on(): array
	{
		return ['\phpbb\db\migration\data\v400\v400a1'];
	}

	public function update_data(): array
	{
		return [
			['config.add', ['restorejumpbox_visible', 1]],
		];
	}
}
