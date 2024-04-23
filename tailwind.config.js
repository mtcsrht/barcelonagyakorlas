/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'media',
  content: ["./public/*.html", "./public/js/*.js","./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

