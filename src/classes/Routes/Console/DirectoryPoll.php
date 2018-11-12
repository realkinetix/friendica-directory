<?php

namespace Friendica\Directory\Routes\Console;

/**
 * @author Hypolite Petovan <mrpetovan@gmail.com>
 */
class DirectoryPoll extends BaseRoute
{
	public function __invoke(array $args)
	{
		return (new \Friendica\Directory\Controllers\Console\DirectoryPoll(
			$this->container->get('atlas'),
			$this->container->get('\Friendica\Directory\Pollers\Directory'),
			$args
		));
	}
}
