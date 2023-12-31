import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                primary0: '#e5dfeb',
                primary: '#502A7B',
                primary2: '#C165A7',
                'primary-dark': '#160C22',
                'primary-dark2': '#0E0716',
                white2: '#F5F5F5',
                whitec: '#CCCCCC',
                review: '#FFA800',
                text333: '#333333',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
                'erica-one': ['Erica One', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                '8xl': '1350px'
            }
        },
    },

    plugins: [forms],
};
