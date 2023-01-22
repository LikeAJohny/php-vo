<?php

declare(strict_types=1);

namespace LikeAJohny\ValueObjects;

abstract class NumberValue
{
    use NumberValueTrait;

    public function __construct(protected readonly int|float $value)
    {
    }

    abstract protected function validate(int $value): void;

    public function __toString(): string
    {
        return (string)$this->value;
    }
}
