<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Services\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Repositories\User\Contracts\UserRepositoryContract;

/**
 * Class UserController
 * @package App\Http\Controllers\User
 */
class UserController extends Controller
{
    use UserSupport;

    /**
     * get users data
     *
     * @param UserRequest $request
     * @param UserRepositoryContract $userRepository
     * @return JsonResponse
     */
    public function get(UserRequest $request, UserRepositoryContract $userRepository) : JsonResponse
    {
        $request->get();

        return Response::ok($userRepository->get());
    }

    /**
     * get users data
     *
     * @param UserRequest $request
     * @param UserRepositoryContract $userRepository
     * @return JsonResponse
     */
    public function create(UserRequest $request, UserRepositoryContract $userRepository) : JsonResponse
    {
        $request->create();

        $user = $userRepository->create(request()->all());
        $user['token'] = $user->createToken('myApp')->accessToken;

        return Response::ok($user);
    }

    /**
     * get users data
     *
     * @param UserRequest $request
     * @param UserRepositoryContract $userRepository
     * @return JsonResponse
     */
    public function update(UserRequest $request, UserRepositoryContract $userRepository) : JsonResponse
    {
        $request->update();

        return Response::ok($userRepository->update(request()->all()));
    }
}