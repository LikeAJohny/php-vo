<?php

declare(strict_types=1);

namespace LikeAJohny\ValueObjects;

abstract class IntegerValue
{
    public function __construct(protected readonly int $value)
    {
    }

    abstract protected function validate(int $value): void;

    public function equals(IntegerValue $value): bool
    {
        return $this->value === $value->toInt();
    }

    public function greaterThan(IntegerValue $value): bool
    {
        return $this->value > $value->toInt();
    }

    public function lessThan(IntegerValue $value): bool
    {
        return $this->value < $value->toInt();
    }

    public function toInt(): int
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string)$this->value;
    }
}
