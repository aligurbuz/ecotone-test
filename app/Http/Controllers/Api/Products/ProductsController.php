<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Products;

use App\Client\Products\Products\Create\CreateClient;
use App\Client\Products\Products\Get\GetClient;
use App\Client\Products\Products\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Products\Contracts\ProductsRepositoryContract;

class ProductsController extends ApiController
{
	/**
	 * get products data
	 *
	 * @param GetClient $client
	 * @param ProductsRepositoryContract $productsRepository
	 * @return array
	 */
	public function get(GetClient $client, ProductsRepositoryContract $productsRepository): array
	{
		$client->handle();
		return $productsRepository->get();
	}


	/**
	 * create products data
	 *
	 * @param CreateClient $client
	 * @param ProductsRepositoryContract $productsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, ProductsRepositoryContract $productsRepository): array|object
	{
		return $this->transaction(function() use($client,$productsRepository) {
		    $client->handle();
		    return $productsRepository->create();
		});
	}


	/**
	 * update products data
	 *
	 * @param UpdateClient $client
	 * @param ProductsRepositoryContract $productsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, ProductsRepositoryContract $productsRepository): array|object
	{
		return $this->transaction(function() use($client,$productsRepository) {
		    $client->handle();
		    return $productsRepository->update();
		});
	}
}
