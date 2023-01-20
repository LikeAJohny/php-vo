<?php

declare(strict_types=1);

namespace LikeAJohny\ValueObjects;

use InvalidArgumentException;

class UrlValue extends StringValue
{
    protected function validate(string $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException($value);
        }
    }
}
