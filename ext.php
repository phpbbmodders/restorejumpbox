<?php

namespace phpbbmodders\restorejumpbox;

class ext extends \phpbb\extension\base
{
	public function is_enableable(): bool
	{
		return phpbb_version_compare(PHPBB_VERSION, '4.0.0-a2-dev', '>=')
			&& phpbb_version_compare(PHPBB_VERSION, '4.1.0-dev', '<');
	}
}
