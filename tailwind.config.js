import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors:
        {
            'Primary/50': '#f2fbf5',
            'Primary/100': '#e1f7e9',
            'Primary/200': '#c3efd5',
            'Primary/300': '#95e0b4',
            'Primary/400': '#5fc98c',
            'Primary/500': '#39ae6a',
            'Primary/600': '#26824d',
            'Primary/700': '#247145',
            'Primary/800': '#215a3a',
            'Primary/900': '#1d4a31',
            'Primary/950': '#0b2819',
            'Secondary/50': '#f5f8fa',
            'Secondary/100': '#eaeff4',
            'Secondary/200': '#cfdde8',
            'Secondary/300': '#a6c1d3',
            'Secondary/400': '#759ebb',
            'Secondary/500': '#5483a3',
            'Secondary/600': '#416988',
            'Secondary/700': '#35546f',
            'Secondary/800': '#2f485d',
            'Secondary/900': '#2b3e4f',
            'Secondary/950': '#161f28',
            'Neutrals/50': '#f5f6f6',
            'Neutrals/100': '#e6e7e7',
            'Neutrals/200': '#d0d1d1',
            'Neutrals/300': '#afb1b1',
            'Neutrals/400': '#848687',
            'Neutrals/500': '#6c6e6e',
            'Neutrals/600': '#5c5e5e',
            'Neutrals/700': '#4e5050',
            'Neutrals/800': '#444546',
            'Neutrals/900': '#3c3d3d',
            'Neutrals/950': '#262626'
        },
        fontSize:
        {
            xs: '0.75rem',
            sm: '0.875rem',
            base: '1rem',
            lg: '1.125rem',
            xl: '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.875rem',
            '4xl': '2.25rem',
            '5xl': '3rem',
            '6xl': '3.75rem'
        },
        borderRadius:
        {
            'rounded-0': '0rem',
            'rounded-1': '0.3125rem',
            'rounded-2': '0.375rem',
            'rounded-3': '0.625rem',
            'rounded-4': '2.25rem',
            'rounded-5': '5.625rem'
        },
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};
