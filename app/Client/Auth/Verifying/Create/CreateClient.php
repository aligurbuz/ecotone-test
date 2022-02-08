<?php

namespace App\Client\Auth\Verifying\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\User;

class CreateClient extends Client
{
	use GeneratorTrait;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = ['hash'];

	/**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [
        'hash' => 'required'
    ];
}
