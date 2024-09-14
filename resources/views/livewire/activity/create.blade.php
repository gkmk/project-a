<div>
    <x-button wire:click="$toggle('showActivityModal')">Add</x-button>
    <x-dialog-modal wire:model.live="showActivityModal">
        <x-slot name="title">
            {{ __('Add Activity') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit>
                <div class="col-span-6 sm:col-span-4">
                    <select name="activity" id="activity" title="activity" wire:model.change="form.activity_id">
                        <option wire:key="0" value="">- Select Activity -</option>
                        @foreach($this->availableActivities() as $activity)
                            <option value="{{$activity->id}}" wire:key="{{$activity->id}}">{{$activity->name}}</option>
                        @endforeach
                    </select>
                    <x-input-error for="form.activity_id"></x-input-error>
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <select name="skill_level" id="skill_level" title="Skill Level"
                            wire:model.change="form.skill_level">
                        <option wire:key="0" value="">- Select Skill Level -</option>
                        @foreach(\App\Enums\SkillLevel::cases() as $skill_level)
                            <option value="{{$skill_level->value}}"
                                    wire:key="{{$skill_level->value}}">{{\Illuminate\Support\Str::title($skill_level->name)}}</option>
                        @endforeach
                    </select>
                    <x-input-error for="form.skill_level"></x-input-error>
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <select name="days_available" id="days_available" title="days_available"
                            wire:model.change="form.days_available">
                        <option wire:key="0" value="">- Select Days -</option>
                        @foreach(\App\Enums\DaySelect::cases() as $days_available)
                            <option value="{{$days_available->value}}"
                                    wire:key="{{$days_available->value}}">{{\Illuminate\Support\Str::title($days_available->name)}}</option>
                        @endforeach
                    </select>
                    <x-input-error for="form.days_available"></x-input-error>
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <select name="time_available" id="time_available" title="time_available"
                            wire:model.change="form.time_available">
                        <option wire:key="0" value="">- Select Days -</option>
                        @foreach(\App\Enums\TimeSelect::cases() as $time_available)
                            <option value="{{$time_available->value}}"
                                    wire:key="{{$time_available->value}}">{{\Illuminate\Support\Str::title($time_available->name)}}</option>
                        @endforeach
                    </select>
                    <x-input-error for="form.time_available"></x-input-error>
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:loading.attr="disabled" wire:click="$toggle('showActivityModal')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3" wire:loading.attr="disabled" wire:click="store">
                {{ __('Add Activity') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
