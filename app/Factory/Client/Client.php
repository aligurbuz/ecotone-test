<?php

declare(strict_types=1);

namespace App\Factory\Client;

use App\Factory\Client\Interfaces\ClientInterface;

/**
 * Class Client
 * @package App\Factory\Client
 */
class Client extends ClientManager implements ClientInterface
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
	protected array $resource = ['ClientIdentifier'];

	/**
	 * Client constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * cr(client request manipulation) method for factory
     *
     * @param array $data
     * @return array
     */
	public function cR(array $data = []) : array
    {
        return $this->make($data);
    }
}
