<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     description="Product Swagger Documentation",
 *     version="0.0.1",
 *     title="product-service"
 * )
 *
 * @OAS\SecurityScheme(
 *      securityScheme="bearerAuth",
 *      type="http",
 *      scheme="bearer"
 *  )
 *
 * @OA\Schema(
 *     schema="ValidationErrors",
 *         @OA\Property(
 *             property="message",
 *             type="string",
 *             example="The given data was invalid.",
 *         ),
 *         @OA\Property(
 *             property="errors",
 *             type="object",
 *                 @OA\Property(
 *                     property="parameter",
 *                     type="array",
 *                     description="Key: request parameter name, value: array of parameter validation errors.",
 *                     @OA\Items(
 *                         example="[The order details field is required.]",
 *                     )
 *                 ),
 *         ),
 * )
 *
 * @OA\Schema(
 *     schema="Links",
 *         @OA\Property(
 *             property="first",
 *             type="string",
 *             example="http://product.localhost/v1/product?page=1",
 *         ),
 *         @OA\Property(
 *             property="last",
 *             type="string",
 *             example="http://product.localhost/v1/product?page=10",
 *         ),
 *         @OA\Property(
 *             property="prev",
 *             type="string",
 *             example="null",
 *         ),
 *         @OA\Property(
 *             property="next",
 *             type="string",
 *             example="http://product.localhost/v1/product?page=2",
 *         ),
 * )
 *
 * @OA\Schema(
 *     schema="Meta",
 *         @OA\Property(
 *             property="current_page",
 *             type="int",
 *             example="1",
 *         ),
 *         @OA\Property(
 *             property="from",
 *             type="int",
 *             example="1",
 *         ),
 *         @OA\Property(
 *             property="last_page",
 *             type="int",
 *             example="1",
 *         ),
 *         @OA\Property(
 *             property="path",
 *             type="string",
 *             example="http://product.localhost/v1/product",
 *         ),
 *         @OA\Property(
 *             property="per_page",
 *             type="int",
 *             example="10",
 *         ),
 *         @OA\Property(
 *             property="to",
 *             type="int",
 *             example="2",
 *         ),
 *         @OA\Property(
 *             property="total",
 *             type="int",
 *             example="2",
 *         ),
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
