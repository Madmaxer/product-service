<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\v1\Contracts\ProductControllerContract;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Product;
use App\ProductConfigurationInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class ProductController implements ProductControllerContract
{
    /** @var ProductConfigurationInterface  */
    private $config;

    public function __construct(ProductConfigurationInterface $config)
    {
        $this->config = $config;
    }

    public function create(CreateProductRequest $request): JsonResponse
    {
        $product = new Product();
        $product->fill($request->validated());
        $product->save();

        return response()->json($product, Response::HTTP_CREATED);
    }

    public function read(): AnonymousResourceCollection
    {
        return ProductResource::collection(Product::paginate($this->config->pageLimit()));
    }

    public function update(UpdateProductRequest $request, Product $product): JsonResponse
    {
        $product->fill($request->validated());
        $product->save();

        return response()->json($product, Response::HTTP_OK);
    }

    public function delete(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
