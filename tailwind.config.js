const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    mode:'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            sans: ['Roboto', ...defaultTheme.fontFamily.sans],
        },

        extend: {
            colors: {
                gray: {
                    900: '#0C0B0B'
                }
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
