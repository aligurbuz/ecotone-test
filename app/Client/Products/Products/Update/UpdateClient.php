<?php 

namespace App\Client\Products\Products\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Product;

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
	protected array $model = [Product::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['product_code' => 'required|integer'];
}
