<?php

declare(strict_types=1);

namespace PhpVo;

use InvalidArgumentException;
use Webmozart\Assert\Assert;

class UrlVo extends StringVo
{
    protected function validate(string $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException($value);
        }
    }
}
