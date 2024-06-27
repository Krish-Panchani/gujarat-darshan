/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: false,
  content: [
    "./*.php",
    "./components/*.php",
    "./Hotels/*.php",
    "./tour-packages/*.php",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        mode: 'white',
        'primary-yellow': '#fbf904',
        'primary-blue': '#0a0a0a',
      },
    },
  },
  plugins: [
    // require('flowbite/plugin'),
  ],
}

