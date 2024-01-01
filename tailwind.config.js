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

            colors:{
                primarycolor:{
                    200 : "#2666E2",
                    100 : "#152235",
                    400 : "#F89831"
                },


                iconbg:{
                    100 : 'rgba(207, 207, 209, 0.2)',
                    50 : 'rgba(215, 215, 223, 0.2)'
                },

                secondarycolor:{
                    100 : "#0914CC"
                }
            }
        },
    },

    plugins: [forms, require("daisyui")],
};
