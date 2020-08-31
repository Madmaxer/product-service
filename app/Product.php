<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @OA\Schema(
 *     description="Product model",
 *     title="Product model",
 *         @OA\Property(
 *             property="id",
 *             title="Id",
 *             type="integer"
 *         ),
 *         @OA\Property(
 *             property="name",
 *             title="Name",
 *             type="string"
 *         ),
 *         @OA\Property(
 *            property="price",
 *            title="Price",
 *            type="number",
 *            format="float"
 *         ),
 *         @OA\Property(
 *            property="currency",
 *            title="Currency",
 *            type="string"
 *         )
 * )
 *
 * @property integer $id
 * @property string $name
 * @property float $price
 * @property string $currency
 * @property \DateTime $created_at
 * @property \DateTime $updated_at
 * @property \DateTime $deleted_at
 */
class Product extends Model
{
    use SoftDeletes;

    const ATTRIBUTE_ID = 'id';
    const ATTRIBUTE_NAME = 'name';
    const ATTRIBUTE_PRICE = 'price';
    const ATTRIBUTE_CURRENCY = 'currency';
    const ATTRIBUTE_CREATED_AT = 'created_at';
    const ATTRIBUTE_UPDATED_AT = 'updated_at';
    const ATTRIBUTE_DELETED_AT = 'deleted_at';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::ATTRIBUTE_NAME, self::ATTRIBUTE_PRICE, self::ATTRIBUTE_CURRENCY,
    ];
}
