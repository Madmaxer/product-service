<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Contracts\ProductControllerContract;

class ProductController implements ProductControllerContract
{
    public function index(): JsonResponse
    {
        return new JsonResponse(['example']);
    }
}
