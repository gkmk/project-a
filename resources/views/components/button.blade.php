<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-3 rounded font-bold bg-primary-500 text-secondary-950']) }}>
    {{ $slot }}
</button>
