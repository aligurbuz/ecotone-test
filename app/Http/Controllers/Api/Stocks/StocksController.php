<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Stocks;

use App\Client\Stocks\Stocks\Create\CreateClient;
use App\Client\Stocks\Stocks\Get\GetClient;
use App\Client\Stocks\Stocks\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Stocks\Contracts\StocksRepositoryContract;

class StocksController extends ApiController
{
	/**
	 * get stocks data
	 *
	 * @param GetClient $client
	 * @param StocksRepositoryContract $stocksRepository
	 * @return array
	 */
	public function get(GetClient $client, StocksRepositoryContract $stocksRepository): array
	{
		$client->handle();
		return $stocksRepository->get();
	}


	/**
	 * create stocks data
	 *
	 * @param CreateClient $client
	 * @param StocksRepositoryContract $stocksRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, StocksRepositoryContract $stocksRepository): array|object
	{
		return $this->transaction(function() use($client,$stocksRepository) {
		    $client->handle();
		    return $stocksRepository->create();
		});
	}


	/**
	 * update stocks data
	 *
	 * @param UpdateClient $client
	 * @param StocksRepositoryContract $stocksRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, StocksRepositoryContract $stocksRepository): array|object
	{
		return $this->transaction(function() use($client,$stocksRepository) {
		    $client->handle();
		    return $stocksRepository->update();
		});
	}
}
