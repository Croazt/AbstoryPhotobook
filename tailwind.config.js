const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resource/**/*.blade.php',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      width :{
        '128' : '32rem',
        '192' : '48rem',
        '256' : '64rem',
        '9/20' : '45%'
      },
      colors : {
        ...colors,
        'utama' : "#5D5C58",

      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
