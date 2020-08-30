<?php

namespace App\Http\Controllers\v1\Contracts;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\ReadProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @OA\Tag(
 *     name="products",
 * ),
 * @OA\SecurityScheme(
 *     name="Authorization",
 *     securityScheme="BearerAuth",
 *     type="http",
 *     description="Bearer token",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 * )
 */
interface ProductControllerContract
{
    /**
     * @OA\Post(
     *     path="/api/v1/product",
     *     tags={"products"},
     *     summary="Creates product",
     *     operationId="createProduct",
     *     @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         required=true,
     *         example="application/json",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="Content-Type",
     *         in="header",
     *         required=true,
     *         example="application/json",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(response=201, description="Returns created product"),
     *     requestBody={"$ref": "#/components/requestBodies/CreateProduct"},
     *     security={
     *         {"BearerAuth": {}}
     *     },
     * )
     *
     * @param CreateProductRequest $request
     * @return JsonResponse
     */
    public function create(CreateProductRequest $request): JsonResponse;

    /**
     * @OA\Get(
     *     path="/api/v1/product",
     *     tags={"products"},
     *     summary="Products list",
     *     description="Returns products",
     *     operationId="products",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Product")
     *     ),
     * )
     *
     * @return AnonymousResourceCollection
     */
    public function read(): AnonymousResourceCollection;

    /**
     * @OA\Patch(
     *     path="/api/v1/product/{productId}",
     *     tags={"products"},
     *     summary="Updates a product",
     *     operationId="updateProduct",
     *     @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         required=true,
     *         example="application/json",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="Content-Type",
     *         in="header",
     *         required=true,
     *         example="application/json",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="productId",
     *         in="path",
     *         description="ID of product that needs to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="name",
     *                 type="string",
     *             ),
     *             @OA\Property(
     *                 property="price",
     *                 type="string",
     *             ),
     *         ),
     *     ),
     *     @OA\Response(response=200, description="Success", @OA\JsonContent(ref="#/components/schemas/Product")),
     *     @OA\Response(response=401, description="Unauthorized"),
     *     @OA\Response(response=404, description="Product not found"),
     *     @OA\Response(response=406, description="Not Acceptable"),
     *     @OA\Response(response=415, description="Unsupported Media Type"),
     *     security={{"bearer":{}}}
     * )
     */
    public function update(UpdateProductRequest $request, Product $product): JsonResponse;

    /**
     * @OA\Delete(
     *     path="/api/v1/product/{productId}",
     *     tags={"products"},
     *     summary="Deletes a product",
     *     operationId="deleteProduct",
     *     @OA\Parameter(
     *         name="Accept",
     *         in="header",
     *         required=true,
     *         example="application/json",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="productId",
     *         in="path",
     *         description="Product id to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(response=204, description="Success, no content", @OA\JsonContent()),
     *     @OA\Response(response=404, description="Product not found"),
     *     @OA\Response(response=401, description="Unauthorized"),
     *     @OA\Response(response=406, description="Not Acceptable"),
     *     security={{"bearer":{}}}
     * )
     */
    public function delete(Product $product): JsonResponse;
}
