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
                primary: '#4F46E5',
                secondary: '#10B981',
            },
            animation: {
                meteor: "meteor 5s linear infinite",
              },
            keyframes: {
                meteor: {
                  "0%": { transform: "rotate(215deg) translateX(0)", opacity: 1 },
                  "70%": { opacity: 1 },
                  "100%": {
                    transform: "rotate(215deg) translateX(-500px)",
                    opacity: 0,
                  },
                },
            },
        },
    },

    plugins: [forms],
};
