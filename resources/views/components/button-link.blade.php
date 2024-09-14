<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center p-2 font-semibold text-xs text-gray-800 dark:text-gray-100 uppercase tracking-widest disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
