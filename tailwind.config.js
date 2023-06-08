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
        }
      },
      fontFamily: {
        main: ["游ゴシック","Yu Gothic"]
      }
    },
  },
  plugins: [],
}

