<?php

namespace Tests\Feature\Products;

use Tests\TestCase;

class ProductsTest extends TestCase
{
    /**
     * @var string
     */
    protected string $endpoint = 'products';

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_products()
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
    public function test_products_post_required_columns()
    {
        $this->postRequiredColumns();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_products_post()
    {
        $this->postHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_products_put()
    {
        $this->putHttpMethod();
    }
}
