<?php

namespace App\Swagger\Controllers\System;


/**
 * Class UserController
 * @package App\Swagger\Controllers\Api\Common
 */
class UserController
{

    /**
     * @OA\Get(
     *      path="/api/user",
     *      operationId="getLoginUser",
     *      tags={"user"},
     *      summary="Logged in user info",
     *      description="Returns Logged in user info",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/User"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid username supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found"
     *     ),
     * )
     *
     * Returns list of projects
     */
    public function user()
    {

    }
}
