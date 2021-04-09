<?php

namespace Mightymango\UnitConversions\Tests;

use Mightymango\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit(): void
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();
        self::assertEquals(212, $fahrenheit);
    }
}
