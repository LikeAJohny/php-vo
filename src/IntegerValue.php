<?php

declare(strict_types=1);

namespace LikeAJohny\ValueObjects;

abstract class IntegerValue
{
    use IntegerValueTrait;

    public function __construct(protected readonly int $value)
    {
    }

    abstract protected function validate(int $value): void;

    public function __toString(): string
    {
        return (string)$this->value;
    }
}
