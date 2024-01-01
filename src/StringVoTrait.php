<?php

declare(strict_types=1);

namespace PhpVo;

trait StringVoTrait
{
    protected readonly string $value;

    public function equals(self $value): bool
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
