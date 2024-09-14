<?php

namespace App\Livewire\Forms;

use App\Enums\DaySelect;
use App\Enums\SkillLevel;
use App\Enums\TimeSelect;
use Illuminate\Validation\Rule;
use Livewire\Form;

class UpdateActivityForm extends Form
{
    public $skill_level = null;
    public $days_available = null;
    public $time_available = null;

    public function rules(): array
    {
        return [
            'skill_level' => [
                'nullable',
                Rule::enum(SkillLevel::class),
            ],
            'days_available' => [
                'nullable',
                Rule::enum(DaySelect::class)
            ],
            'time_available' => [
                'nullable',
                Rule::enum(TimeSelect::class)
            ],
        ];
    }
}
