<?php

declare(strict_types=1);

namespace App\Factory\Request\Interfaces;

use App\Services\Request\Request as HttpRequest;

interface RequestInterface
{
    /**
     * @param string $email
     * @param string $password
     * @return array
     */
    public function login(string $email,string $password) : array;

    /**
     * @param array $data
     * @return HttpRequest
     */
    public function picqer(array $data = []) : HttpRequest;
}
