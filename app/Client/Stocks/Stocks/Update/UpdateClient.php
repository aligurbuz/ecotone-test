<?php 

namespace App\Client\Stocks\Stocks\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Stock;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = [];

	/**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [Stock::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['stock_code' => 'required|integer'];
}
