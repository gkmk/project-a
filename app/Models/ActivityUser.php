<?php

namespace App\Models;

use App\Enums\DaySelect;
use App\Enums\SkillLevel;
use App\Enums\TimeSelect;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ActivityUser extends Pivot
{
    protected function casts(): array
    {
        return [
            'skill_level' => SkillLevel::class,
            'days_available' => DaySelect::class,
            'time_available' => TimeSelect::class,
        ];
    }
}
