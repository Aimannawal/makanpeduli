import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    100: '#e0f2ff',
                    200: '#b3d9ff',
                    300: '#80bfff',
                    400: '#4da6ff',
                    500: '#1a8cff',
                    600: '#0067cc',
                    700: '#0052a3',
                    800: '#003d7a',
                    900: '#002951',
                },
                gray: {
                    100: '#f5f5f5',
                    200: '#eeeeee',
                    300: '#e0e0e0',
                    400: '#bdbdbd',
                    500: '#9e9e9e',
                    600: '#757575',
                    700: '#616161',
                    800: '#424242',
                    900: '#212121',
                },
                green: {
                    500: '#22c55e',
                },
            }
        },
    },

    plugins: [forms],
};
