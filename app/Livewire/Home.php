<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

class Home extends Component
{
    #[Computed]
    public function users(): Collection
    {
        return User::whereHas('activities', function (Builder $query) {
            $query->whereIn('id', auth()->user()->activities()->select('id'));
        })
            ->whereNot('id', auth()->user()->id)
            ->get();
    }

}
