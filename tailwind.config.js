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
        screens: {
            mobile: '440px',
            // => @media (min-width: 440px) { ... }
      
            mobilemd: '590px',
            // => @media (min-width: 590px) { ... }
      
            tablet: '920px',
            // => @media (min-width: 920px) { ... }
      
            laptop: '990px',
            // => @media (min-width: 990px) { ... }
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
