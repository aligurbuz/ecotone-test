<?php

declare(strict_types=1);

namespace App\Factory\Request;

use App\Facades\Authenticate\ApiKey;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\Exception as ExceptionService;
use App\Factory\Request\Interfaces\RequestInterface;
use App\Services\Request\Request as HttpRequest;

/**
 * Class Request
 * @package App\Factory\Request
 */
class Request extends RequestManager implements RequestInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];


	/**
	 * Request constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * @param array $data
     * @return HttpRequest
     */
    public function picqer(array $data = []) : HttpRequest
    {
        return (new HttpRequest($data));
    }

    /**
     * the login request it is made
     *
     * @param string $email
     * @param string $password
     * @return array
     */
    public function login(string $email,string $password) : array
    {
        $authGuard = Auth::guard(authGuard());

        if (
            $authGuard->attempt(
                [   'email'     => $email,
                    'password'  => $password
                ]
            )) {

            $user = Auth::guard(authGuard())->user();

            $data = [];
            $data['user']  = $user->toArray();

            if($data['user']['status']=='1' && $data['user']['is_deleted']=='0'){
                $data['token'] = $user->createToken(ApiKey::who())->accessToken;

                return $data;
            }
        }

        return ExceptionService::loginException();
    }
}
