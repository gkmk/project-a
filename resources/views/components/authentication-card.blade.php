<div
    class="grid grid-rows-6 sm:grid-rows-none sm:grid-cols-2 sm:gap-40 h-dvh sm:h-[80vh] w-full sm:w-3/4 p-5 sm:p-20 sm:rounded-3xl bg-secondary-50 dark:bg-secondary-950">
    <div class="grid grid-cols-2 content-center" style="background-image: url()">
        <div>
            <x-authentication-card-logo/>
        </div>
        <div class="relative">
            <a class="absolute top-0 right-0 px-3 py-2 rounded text-neutrals-50 bg-secondary-800" href="/">Back to
                website ></a>
        </div>
    </div>

    <div class="row-span-5 flex flex-col justify-center">
        {{ $slot }}
    </div>
</div>
