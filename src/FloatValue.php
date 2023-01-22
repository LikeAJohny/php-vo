<?php

declare(strict_types=1);

namespace LikeAJohny\ValueObjects;

abstract class FloatValue
{
    use FloatValueTrait;

    public function __construct(protected readonly float $value)
    {
    }

    abstract protected function validate(float $value): void;

    public function __toString(): string
    {
        return (string)$this->value;
    }
}
