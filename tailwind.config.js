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
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat']
            },
            rotate: {
                '60': '60deg',
            },

            keyframes: {
                test: {
                    '0%': { scale: .5},
                    '100%': { scale: 1}
                }
            },

            animation: {
                test: 'test 1s '
            }
        },
    },

    plugins: [forms, typography],
};
