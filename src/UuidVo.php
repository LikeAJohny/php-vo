<?php

declare(strict_types=1);

namespace PhpVo;

use Webmozart\Assert\Assert;

class UuidVo extends StringVo
{
    function validate(string $value): void
    {
        Assert::uuid($value);
    }
}
