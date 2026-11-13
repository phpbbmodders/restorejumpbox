<?php

namespace phpbbmodders\restorejumpbox\event;

use phpbb\config\config;
use phpbb\request\request_interface;
use phpbb\template\template;
use phpbb\user;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	public function __construct(
		private config $config,
		private request_interface $request,
		private template $template,
		private user $user,
		private string $root_path,
		private string $php_ext,
	)
	{
	}

	public static function getSubscribedEvents(): array
	{
		return ['core.page_footer' => 'populate_jumpbox'];
	}

	/**
	 * Populate the public selector using core's permission-filtered forum tree.
	 */
	public function populate_jumpbox(): void
	{
		// Builds before the core removal still provide their own jumpbox.
		if (isset($this->config['load_jumpbox']))
		{
			return;
		}

		$page = $this->user->page['page_name'] ?? '';
		if ($page !== 'viewforum.' . $this->php_ext && $page !== 'viewtopic.' . $this->php_ext)
		{
			return;
		}

		if ($page === 'viewtopic.' . $this->php_ext && $this->request->variable('view', '') === 'print')
		{
			return;
		}

		\make_jumpbox(
			\append_sid($this->root_path . 'viewforum.' . $this->php_ext),
			$this->request->variable('f', 0),
			false,
			false,
			true,
		);
		$this->template->assign_var('S_RESTOREJUMPBOX', true);
	}
}
