<?php
/**
 * Copyright (c) 2024.
 */

namespace App\Livewire\Activity;

use App\Livewire\Forms\UpdateActivityForm;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public UpdateActivityForm $form;

    #[On('activity-added')]
    #[Computed]
    public function activities()
    {
        return auth()->user()->activities()->paginate();
    }

    public function updateActivity(int $activity): void
    {
        auth()->user()->activities()->updateExistingPivot($activity, [
            $this->form->validate(),
        ]);
    }

    public function removeActivity(int $activity): void
    {
        auth()->user()->activities()->detach($activity);
    }

    public function render()
    {
        return view('livewire.activity.index');
    }
}
