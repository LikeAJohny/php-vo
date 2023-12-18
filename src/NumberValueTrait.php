<?php

declare(strict_types=1);

namespace PhpVo;

trait NumberValueTrait
{
    protected readonly int|float $value;

    public function equals(self $value): bool
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
}
