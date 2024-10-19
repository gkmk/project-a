@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded focus:shadow-none focus:ring-0 dark:bg-secondary-950 border-neutrals-500 dark:border-secondary-700 focus:border-primary-500 accent-primary-500']) !!}>
