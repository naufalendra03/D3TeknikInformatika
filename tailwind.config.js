/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#f1f7fe",
                    100: "#e2edfc",
                    200: "#bfdaf8",
                    300: "#87bdf2",
                    400: "#479ae9",
                    500: "#1f7ed8",
                    600: "#1161b8",
                    700: "#0f4c92",
                    800: "#11437b",
                    900: "#143966",
                    950: "#0d2444",
                },
            },
        },
    },
    plugins: [
        require("flowbite/plugin")({
            datatables: true,
        }),
    ],
};
