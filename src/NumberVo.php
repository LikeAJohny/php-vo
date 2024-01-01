<?php

declare(strict_types=1);

namespace PhpVo;

abstract class NumberVo
{
    use NumberVoTrait;

    public function __construct(protected readonly int|float $value)
    {
    }

    abstract protected function validate(int $value): void;

    public function __toString(): string
    {
        return (string)$this->value;
    }
}
