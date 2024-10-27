/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: "#249EA1",
                    light: "#C5F1F2",
                    dark: "#1E8385",
                },
                secondary: {
                    DEFAULT: "#FCBB15",
                    light: "#FCBB15",
                    dark: "#A17402",
                },
                tertiary: {
                    DEFAULT: "#FE8C12",
                    light: "#FFF5EB",
                    dark: "#A35401",
                },
                neutral: {
                    DEFAULT: "#A2A2A2",
                    light: "#FAFAFA",
                    dark: "#131313",
                },
                info: {
                    DEFAULT: "#244FA1",
                    light: "#DEE6F8",
                    dark: "#0F2143"
                }
            },
            fontFamily: {
                metropolis: ["Metropolis", "sans-serif"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
