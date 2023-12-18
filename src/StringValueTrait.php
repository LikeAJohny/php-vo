<?php

declare(strict_types=1);

namespace PhpVo;

trait StringValueTrait
{
    protected readonly string $value;

    public function equals(self $value): bool
    {
        return $this->value === $value->toString();
    }

    public function append(self $value, string $delimiter = ''): self
    {
        return new self($this->value . $delimiter . $value);
    }

    public function prepend(self $value, string $delimiter = ''): self
    {
        return new self($value . $delimiter . $this->value);
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
