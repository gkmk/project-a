<tr>
    <td class="border border-slate-600">{{$activity->name}}</td>
    <td class="border border-slate-600">{{$activity->pivot->skill_level?->name}}</td>
    <td class="border border-slate-600">{{$activity->pivot->days_available?->name}}</td>
    <td class="border border-slate-600">{{$activity->pivot->time_available?->name}}</td>
    <td class="border border-slate-600">
        @can('updateRelation', $activity)
            <x-button-link>Update</x-button-link>
        @endcan
        @can('detach', $activity)
                <x-button-link
                    wire:confirm="Are you sure?"
                    wire:click="removeActivity({{$activity->id}})">Remove
                </x-button-link>
        @endcan
    </td>
</tr>

