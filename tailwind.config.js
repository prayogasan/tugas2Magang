import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            backgroundColor: {
                'dark': '#121212',
            },
            textColor: {
                'dark': '#ffffff',
            },
        },
    },

    plugins: [require('flowbite/plugin'),
    require('tailwindcss-dark-mode')(),
    ]
};
