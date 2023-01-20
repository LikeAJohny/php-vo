<?php

declare(strict_types=1);

namespace LikeAJohny\ValueObjects;

abstract class NumberValue
{
    public function __construct(protected readonly int|float $value)
    {
    }

    abstract protected function validate(int $value): void;

    public function equals(NumberValue $value): bool
    {
        if (is_float($this->value)) {
            return $this->toFloat() === $value->toFloat();
        }

        return $this->toInt() === $value->toInt();
    }

    public function toInt(): int
    {
        return (int)$this->value;
    }

    public function toFloat(): float
    {
        return (float)$this->value;
    }

    public function __toString(): string
    {
        return (string)$this->value;
    }
}
