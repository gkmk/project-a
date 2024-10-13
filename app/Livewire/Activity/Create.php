<?php
/**
 * Copyright (c) 2024.
 */

namespace App\Livewire\Activity;

use App\Livewire\Forms\AddActivityForm;
use App\Models\Activity;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Create extends Component
{
    public AddActivityForm $form;

    public $showActivityModal = false;

    public function store(): void
    {
        $this->form->store();

        $this->dispatch('activity-added');

        $this->reset('showActivityModal');
    }

    #[Computed]
    public function availableActivities()
    {
        return Activity::whereNotIn('id', auth()->user()->activities()->select('id'))->get();
    }

    public function render()
    {
        return view('livewire.activity.create');
    }
}
