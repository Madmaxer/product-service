<?php

namespace App\Http\Requests;

use App\Enums\Currency;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @OA\RequestBody(
 *     request="UpdateProduct",
 *     required=true,
 *     @OA\JsonContent(
 *         @OA\Property(
 *             property="name",
 *             type="string",
 *         ),
 *         @OA\Property(
 *             property="price",
 *             type="number",
 *         ),
 *     ),
 * ),
 */
class UpdateProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255', 'unique:products,name,NULL,id,deleted_at,NULL'],
            'price' => ['sometimes', 'required', 'numeric', 'min:1', 'max:21474836'],
        ];
    }
}
