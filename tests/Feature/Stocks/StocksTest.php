<?php

namespace Tests\Feature\Stocks;

use Tests\TestCase;

class StocksTest extends TestCase
{
    /**
     * @var string
     */
    protected string $endpoint = 'stocks';

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_stocks()
    {
        $this->getHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_products_relations()
    {
        $this->getHttpMethodWithRelations();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_stocks_post_required_columns()
    {
        $this->postRequiredColumns();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_stocks_post()
    {
        $this->postHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_stocks_put()
    {
        $this->putHttpMethod();
    }
}
