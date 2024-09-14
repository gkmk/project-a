<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div
                class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">

                <div class="grid grid-cols-4 gap-4">
                    @foreach($this->users as $user)
                        <div class="bg-gray-600 dark:bg-slate-800 rounded">
                            <img src="{{$user->profile_photo_url}}"/>
                            <x-paragraph :text="$user->name"></x-paragraph>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
