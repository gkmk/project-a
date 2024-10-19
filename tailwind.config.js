/*
 * Copyright (c) 2024.
 */

import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'selector',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors:
        {
            'primary-50': '#f2fbf5',
            'primary-100': '#e1f7e9',
            'primary-200': '#c3efd5',
            'primary-300': '#95e0b4',
            'primary-400': '#5fc98c',
            'primary-500': '#39ae6a',
            'primary-600': '#26824d',
            'primary-700': '#247145',
            'primary-800': '#215a3a',
            'primary-900': '#1d4a31',
            'primary-950': '#0b2819',
            'secondary-50': '#f5f8fa',
            'secondary-100': '#eaeff4',
            'secondary-200': '#cfdde8',
            'secondary-300': '#a6c1d3',
            'secondary-400': '#759ebb',
            'secondary-500': '#5483a3',
            'secondary-600': '#416988',
            'secondary-700': '#35546f',
            'secondary-800': '#2f485d',
            'secondary-900': '#2b3e4f',
            'secondary-950': '#161f28',
            'neutrals-50': '#f5f6f6',
            'neutrals-100': '#e6e7e7',
            'neutrals-200': '#d0d1d1',
            'neutrals-300': '#afb1b1',
            'neutrals-400': '#848687',
            'neutrals-500': '#6c6e6e',
            'neutrals-600': '#5c5e5e',
            'neutrals-700': '#4e5050',
            'neutrals-800': '#444546',
            'neutrals-900': '#3c3d3d',
            'neutrals-950': '#262626'
        },
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};
