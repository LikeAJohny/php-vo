<?php

namespace LikeAJohny\ValueObjectsTest;

use PHPUnit\Framework\TestCase;
use LikeAJohny\ValueObjects\FloatValue;

class FloatValueTest extends TestCase
{
    public function testLeavesInitialFloatValueUntouched(): void
    {
        $initialFloat = 13.37;
        $floatValue = $this->floatValue($initialFloat);

        $this->assertEquals($initialFloat, $floatValue->toFloat());
    }

    public function testDetectsEqualFloatValues(): void
    {
        $floatValue = $this->floatValue(123.456);
        $equalFloatValue = $this->floatValue(123.456);

        $this->assertTrue($floatValue->equals($equalFloatValue));
    }

    public function testDetectsDifferentFloatValues(): void
    {
        $floatValue = $this->floatValue(123.456);
        $equalFloatValue = $this->floatValue(654.321);

        $this->assertFalse($floatValue->equals($equalFloatValue));
    }

    public function testDetectsSmallerFloatValues(): void
    {
        $floatValue = $this->floatValue(19.90);
        $smallerFloatValue = $this->floatValue(19.88);

        $this->assertTrue($floatValue->greaterThan($smallerFloatValue));
    }

    public function testDetectsGreaterFloatValues(): void
    {
        $floatValue = $this->floatValue(19.88);
        $greaterFloatValue = $this->floatValue(19.90);

        $this->assertTrue($floatValue->lessThan($greaterFloatValue));
    }

    private function floatValue(float $value): FloatValue
    {
        return $this->getMockForAbstractClass(FloatValue::class, [$value]);
    }
}
