<?php

declare(strict_types=1);

namespace Tests\TirePressureMonitoring;

use PHPUnit\Framework\TestCase;
use RacingCar\TirePressureMonitoring\Alarm;

class AlarmTest extends TestCase
{
    public function testShouldStartOff(): void
    {
        $alarm = new Alarm();
        $this->assertFalse($alarm->isAlarmOn());
    }

    /**
     * @test
     */
    public function should_be_on_if_pressure_is_outside_range(): void
    {
        $alarm = new Alarm();
        $alarm->check();
        $this->assertTrue($alarm->isAlarmOn());
    }
}
