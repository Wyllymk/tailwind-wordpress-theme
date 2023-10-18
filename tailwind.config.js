const theme = require("./theme.json");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: ["./*.php", "./**/*.php", "./resources/css/*.css", "./resources/js/*.js", "./safelist.txt"],
  theme: {
    container: {
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "0rem",
      },
    },
    extend: {
      colors: tailpress.colorMapper(tailpress.theme("settings.color.palette", theme)),
      fontSize: tailpress.fontSizeMapper(tailpress.theme("settings.typography.fontSizes", theme)),
      fontFamily: {
        "lovely-home": ["Lovely Home", "serif"],
      },
      maxWidth: {
        min: "250px",
      },
    },
    screens: {
      xxs: "540px",
      xs: "640px",
      sm: "768px",
      sm2: "820px",
      sm3: "912px",
      md: "992px",
      lg: tailpress.theme("settings.layout.contentSize", theme),
      xl: tailpress.theme("settings.layout.wideSize", theme),
      "2xl": "1440px",
    },
  },
  plugins: [tailpress.tailwind],
};
