<?php

declare(strict_types=1);

namespace LikeAJohny\ValueObjects;

abstract class FloatValue
{
    public function __construct(protected readonly float $value)
    {
    }

    abstract protected function validate(float $value): void;

    public function equals(FloatValue $value): bool
    {
        return $this->value === $value->toFloat();
    }

    public function greaterThan(FloatValue $value): bool
    {
        return $this->value > $value->toFloat();
    }

    public function lessThan(FloatValue $value): bool
    {
        return $this->value < $value->toFloat();
    }

    public function toFloat(): float
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string)$this->value;
    }
}
