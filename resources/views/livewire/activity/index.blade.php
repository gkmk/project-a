<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div
                class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                <div class="dark:text-gray-100 mb-4">
                    <table class="table-auto w-full border-collapse border border-slate-500">
                        <thead>
                        <tr class="bg-white dark:bg-gray-800">
                            <th class="border border-slate-600">Activity</th>
                            <th class="border border-slate-600">Level</th>
                            <th class="border border-slate-600">Days</th>
                            <th class="border border-slate-600">Time</th>
                            <th class="border border-slate-600">Action</th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-100 dark:bg-gray-700 text-center">
                        @each('activity.list', $this->activities, 'activity', 'activity.empty')
                        </tbody>
                    </table>
                    {{ $this->activities->links() }}
                </div>

                <livewire:activity.create></livewire:activity.create>
            </div>
        </div>
    </div>
</div>
