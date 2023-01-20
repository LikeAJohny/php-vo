<?php

declare(strict_types=1);

namespace LikeAJohny\ValueObjects;

use Webmozart\Assert\Assert;

class EmailValue extends StringValue
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
