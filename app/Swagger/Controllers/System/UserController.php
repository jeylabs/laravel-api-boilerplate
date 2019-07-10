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
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       }
     *     )
     *
     * Returns list of projects
     */
    public function user()
    {

    }
}
