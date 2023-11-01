/** @type {import('tailwindcss').Config} */
const theme = require('./theme.json');

const colors = {}
theme.settings.color.palette.forEach(color => {
  colors[color.slug] = color.color
})

const fonts = {}
theme.settings.typography.fontFamilies.forEach(fam => {
  fonts[fam.slug] = fam.fontFamily.split(',')
})

module.exports = {
  content: [
    "./acf/**/*.php",
    "./acf/**/*.js",
    "./acf/**/*.css",
    "./src/**/*.js",
    "./src/**/*.css",
    "../../uploads/faustwp/**/*.{php,js,css}",
  ],
  theme: {
    screens: {
        'xs': '480px',
        'sm': '600px',
        'md': '782px',
        'lg': '900px',
        'xl': '1000px',
        '2xl': '1400px',
    },
    container: {
      center: true,
      padding: {
          DEFAULT: '1rem',
          sm: '1rem',
          lg: '2rem',
      },
      width: '100%',
      maxWidth: theme.settings.layout.contentSize
    },
    colors: colors,
    fontFamily: fonts,
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

