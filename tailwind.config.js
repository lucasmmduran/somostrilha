const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        container: {
            // you can configure the container to be centered
            center: true,

            // or have default horizontal padding
            padding: "1rem",

            // default breakpoints but with 40px removed
            screens: {
                sm: "600px",
                md: "728px",
                lg: "984px",
                xl: "1140px",
                "2xl": "1140px",
            },
        },
        extend: {
            fontFamily: {
                main: ["Fira Sans", ...defaultTheme.fontFamily.sans],
                secondary: ["Merienda One", ...defaultTheme.fontFamily.sans],
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                72: "18rem",
                84: "21rem",
                96: "24rem",
                108: "27rem",
                120: "30rem",
                132: "33rem",
                144: "36rem",
                156: "39rem",
                168: "42rem",
                180: "45rem",
                192: "48rem",
                204: "51rem",
            },
            colors: {
                primary: colors.yellow,
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
