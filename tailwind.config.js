import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
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
        },
    },

    plugins: [forms],
};
module.exports = {
    content: [
      './resources/views/**/*.blade.php',
      './resources/js/**/*.js',
    ],
    theme: {
      extend: {
        colors: {
          dark: {
            800: '#1f2937', // Dark background
            900: '#111827', // Darker background
          },
        },
      },
    },
    plugins: [],
  };