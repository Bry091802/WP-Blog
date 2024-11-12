/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        dark: "var(--dark)",
        light: "var(--light)",
        gray: "rgb(0, 0, 0, 0.2)",
      },
    },
  },
  plugins: [],
};

