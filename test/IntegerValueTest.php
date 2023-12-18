<?php

namespace PhpVoTest;

use PHPUnit\Framework\TestCase;
use PhpVo\IntegerValue;

class IntegerValueTest extends TestCase
{
    public function testLeavesInitialFloatValueUntouched(): void
    {
        $initialInt = 1337;
        $integerValue = $this->integerValue($initialInt);

        $this->assertEquals($initialInt, $integerValue->toInt());
    }

    public function testDetectsEqualIntegerValues(): void
    {
        $integerValue = $this->integerValue(123456);
        $equalIntegerValue = $this->integerValue(123456);

        $this->assertTrue($integerValue->equals($equalIntegerValue));
    }

    public function testDetectsDifferentIntegerValues(): void
    {
        $integerValue = $this->integerValue(123456);
        $equalIntegerValue = $this->integerValue(654321);

        $this->assertFalse($integerValue->equals($equalIntegerValue));
    }

    public function testDetectsSmallerIntegerValues(): void
    {
        $integerValue = $this->integerValue(1990);
        $smallerIntegerValue = $this->integerValue(1988);

        $this->assertTrue($integerValue->greaterThan($smallerIntegerValue));
    }

    public function testDetectsGreaterIntegerValues(): void
    {
        $integerValue = $this->integerValue(1988);
        $greaterIntegerValue = $this->integerValue(1990);

        $this->assertTrue($integerValue->lessThan($greaterIntegerValue));
    }

    private function integerValue(int $value): IntegerValue
    {
        return $this->getMockForAbstractClass(IntegerValue::class, [$value]);
    }
}
