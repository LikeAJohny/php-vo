<?php

declare(strict_types=1);

namespace PhpVo;

trait IntegerVoTrait
{
    protected readonly int $value;

    public function equals(self $value): bool
    {
        return $this->value === $value->toInt();
    }

    public function greaterThan(self $value): bool
    {
        return $this->value > $value->toInt();
    }

    public function lessThan(self $value): bool
    {
        return $this->value < $value->toInt();
    }

    public function toInt(): int
    {
        return $this->value;
    }
}
