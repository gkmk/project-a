<?php

namespace App\Livewire\Forms;

use App\Enums\DaySelect;
use App\Enums\SkillLevel;
use App\Enums\TimeSelect;
use Illuminate\Validation\Rule;
use Livewire\Form;

class AddActivityForm extends Form
{
    public $activity_id = null;
    public $skill_level = null;
    public $days_available = null;
    public $time_available = null;

    public function rules(): array
    {
        return [
            'activity_id' => 'required|exists:activities,id',
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

    public function store(): void
    {
        auth()->user()->activities()->attach($this->activity_id, $this->validate());

        $this->reset();
    }
}
