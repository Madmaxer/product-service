<?php

namespace App\Enums;

class Currency
{
    const PLN = 'PLN';
    const USD = 'USD';
    const EUR = 'EUR';

    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function getValues(): array
    {
        return [
            self::PLN,
            self::USD,
            self::EUR,
        ];
    }
}
