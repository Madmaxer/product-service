<?php

namespace App\Http\Resources;

use App\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * @inheritdoc
     */
    public function toArray($request)
    {
        return [
            Product::ATTRIBUTE_ID => $this->id,
            Product::ATTRIBUTE_NAME => $this->name,
            Product::ATTRIBUTE_PRICE => $this->price,
            Product::ATTRIBUTE_CURRENCY => $this->currency,
        ];
    }
}
