<?php

namespace App\Http\Controllers\Contracts;

use Illuminate\Http\JsonResponse;

/**
 * @OA\Tag(
 *     name="products",
 * )
 */
interface ProductControllerContract
{
    /**
     * @OA\Get(
     *     path="/api/v1/product",
     *     tags={"products"},
     *     summary="Products list",
     *     description="Returns products",
     *     operationId="products",
     *     @OA\Response(response=200, description="Returns products"),
     * )
     */
    public function index(): JsonResponse;
}
