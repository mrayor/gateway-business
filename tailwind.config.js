module.exports = {
    theme: {
        fontFamily: {
            display: ["Raleway, Roboto, sans-serif"]
        },
        container: {
            center: true,
            padding: "1rem"
        },

        extend: {
            colors: {
                primary: "#00CF83",
                secondary: "#2F2F2F",
                grey: "#FAFAFA"
            },
            borderWidth: {
                tiny: "0.5px"
            }
        }
    },
    variants: {},
    plugins: [require("@tailwindcss/custom-forms")]
};
