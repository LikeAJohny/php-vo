<?php

declare(strict_types=1);

namespace PhpVo;

abstract class StringValue
{
    use StringValueTrait;

    public function __construct(protected readonly string $value)
    {
        $this->validate($this->value);
    }

    abstract protected function validate(string $value): void;
}
