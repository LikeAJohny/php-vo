<?php

declare(strict_types=1);

namespace PhpVo;

trait FloatVoTrait
{
    protected readonly float $value;

    public function equals(self $value): bool
    {
        return $this->value === $value->toFloat();
    }

    public function greaterThan(self $value): bool
    {
        return $this->value > $value->toFloat();
    }

    public function lessThan(self $value): bool
    {
        return $this->value < $value->toFloat();
    }

    public function toFloat(): float
    {
        return $this->value;
    }
}
