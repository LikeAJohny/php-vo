<?php

declare(strict_types=1);

namespace ValueObjects;

abstract class StringValue
{
    public function __construct(protected readonly string $value)
    {
        $this->validate($this->value);
    }

    abstract protected function validate(string $value): void;

    public function equals(StringValue $value): bool
    {
        return $this->value === $value->toString();
    }

    public function length(): int
    {
        return strlen($this->value);
    }

    public function empty(): bool
    {
        return $this->value === '';
    }

    public function toString(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
