<?php 

namespace App\Client\Stocks\Stocks\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['stock_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['stock_code'];


	/**
	 * generates stock_code for client
	 *
	 * @return int
	 */
	public function stockCodeGenerator(): int
	{
		return generateHash();
	}
}
