<?php

declare(strict_types=1);

class Lasagna
{
    const OVEN_TIME_MINUTES = 40;
    const MINUTES_PER_LAYER = 2;

    public function expectedCookTime() {
        return self::OVEN_TIME_MINUTES;
    }

    public function remainingCookTime(int $elapsed_minutes) {
        return self::OVEN_TIME_MINUTES - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep) {
        return $layers_to_prep * self::MINUTES_PER_LAYER;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes) {
        return self::totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    public function alarm() {
        return "Ding!";
    }
}
