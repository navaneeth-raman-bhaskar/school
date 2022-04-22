<?php


namespace App\Services;


use JetBrains\PhpStorm\Pure;

class Gender
{
    public const MALE = 1;
    public const FEMALE = 2;
    public const NON_BINARY = 3;

    private const GENDERS = [
        self::MALE => 'Male',
        self::FEMALE => 'Female',
        self::NON_BINARY => 'Non Binary',
    ];

    public static function name(?int $key): ?string
    {
        return self::GENDERS[$key] ?? null;
    }

    public static function all(): array
    {
        return self::GENDERS;
    }

    #[Pure] public static function keys(): array
    {
        return array_keys(self::all());
    }
}
