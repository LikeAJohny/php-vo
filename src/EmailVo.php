<?php

declare(strict_types=1);

namespace PhpVo;

use Webmozart\Assert\Assert;

class EmailVo extends StringVo
{
    protected function validate(string $value): void
    {
        Assert::email($value);
    }

    public function withoutPlus(): self
    {
        return new self(preg_replace("/\+\S+(?=@\w+)/", "", $this->value));
    }
}
