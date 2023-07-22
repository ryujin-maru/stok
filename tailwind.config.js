/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        main: {
          500: '#333',
          600: '#E41B15',
        },
      },
      fontFamily: {
        main: ["Shippori Mincho", "serif","游ゴシック","Yu Gothic"],
        sub:['"Source Serif 4"','serif'],
        rare:["blueSpring","游ゴシック","Yu Gothic"]
      },
    },
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        ".text-shadow-sm": {
          textShadow: "0px 1px 3px darkgrey"
        },
        ".text-shadow": {
          textShadow: "0px 2px 3px darkgrey"
        },
        ".text-shadow-md": {
          textShadow: "0px 3px 3px darkgrey"
        },
        ".text-shadow-lg": {
          textShadow: "0px 5px 3px darkgrey"
        },
    };
    addUtilities(newUtilities);
  }
  ],
}
