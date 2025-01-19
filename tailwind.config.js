import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            container: {
                padding: "1rem",
                center: true,
                screens: {
                    sm: '680px',
                    md: '728px',
                    lg: '984px',
                    xl: '1240px',
                    '2xl': '1172px',
                    '3xl': '1372px',
                }
            },
        },
    },
    plugins: [],
};
