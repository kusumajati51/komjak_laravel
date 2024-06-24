import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.{vue,js,ts,jsx,tsx}",
        "./node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx,vue}",
        "./node_modules/flowbite/**/*.{vue,js,ts,jsx,tsx}",
        "./vendor/awcodes/filament-curator/resources/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                merit: ["Merriweather", "meri-weather"],
                feltpent: ["Feltpen", "sans-serif"],
                "lenotype-feltpen": ["Lenotype_FeltPen", "sans-serif"],
                "georgia-pro": ["GeorgiaPro_Light", "sans-serif"],
            },
        },
    },

    plugins: [forms, typography,require("daisyui"), require("flowbite/plugin")],
};
