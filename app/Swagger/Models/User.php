<?php

namespace App\Swagger\Models;

/**
 * Class User
 *
 * @package Models
 *
 * @OA\Schema(
 *     description="User",
 *     title="User",
 *     @OA\Xml(
 *         name="user"
 *     )
 * )
 */
class User
{
    /**
     * @OA\Property(
     *     format="int64",
     *     description="ID",
     *     title="ID"
     * )
     *
     * @var integer
     */
    private $id;
    /**
     * @OA\Property(
     *     description="First Name",
     *     title="First Name"
     * )
     *
     * @var string
     */
    private $first_name;
}
