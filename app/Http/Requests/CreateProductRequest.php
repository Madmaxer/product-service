<?php

namespace App\Http\Requests;

use App\Enums\Currency;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @OA\RequestBody(
 *     request="CreateProduct",
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
 *         @OA\Property(
 *             property="currency",
 *             type="string",
 *         ),
 *     ),
 * ),
 */
class CreateProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:products,name,NULL,id,deleted_at,NULL'],
            'price' => ['required', 'numeric', 'min:1', 'max:21474836'],
            'currency' => ['required', 'string', Rule::in(Currency::getValues())],
        ];
    }
}
