<?php


/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API Service",
 *      description="API Service",
 *      @OA\Contact(
 *          email=""
 *      ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */


/**
 *  @OA\Server(
 *      url="https://projects.dev/api/v1",
 *      description="API Server"
 * )
 */

/**
 * @OA\SecurityScheme(
 *     type="oauth2",
 *     description="Use a global client_id / client_secret and your username / password combo to obtain a token",
 *     name="Password Based",
 *     in="header",
 *     scheme="https",
 *     securityScheme="Password Based",
 *     @OA\Flow(
 *         flow="password",
 *         authorizationUrl="/oauth/authorize",
 *         tokenUrl="/oauth/token",
 *         refreshUrl="/oauth/token/refresh",
 *         scopes={}
 *     )
 * )
 */