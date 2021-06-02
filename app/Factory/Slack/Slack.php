<?php

declare(strict_types=1);

namespace App\Factory\Slack;

use App\Factory\Slack\Resource\Html\Html;
use App\Services\Slack as SlackServiceManager;
use App\Factory\Slack\Interfaces\SlackInterface;

/**
 * Class Slack
 * @package App\Factory\Slack
 */
class Slack extends SlackManager implements SlackInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

    /**
     * @var array|string[]
     */
	protected array $resource = ['html'];

	/**
	 * Slack constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * get error internal error slack pusher
     *
     * @return void
     */
	public function getError500() : void
    {
        if(
            isset($this->binds['resource']['html'])
            && ($html = $this->binds['resource']['html']) instanceof Html
            && method_exists($html,'getError500')
        ){
            SlackServiceManager::channel('logger')
                ->push($html->getError500());
        }
    }
}
