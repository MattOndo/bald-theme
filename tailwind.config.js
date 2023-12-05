/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    './components/**/*.{js,ts,jsx,tsx,mdx,css}',
    './pages/**/*.{js,ts,jsx,tsx,mdx,css}',
    './wp-templates/**/*.{js,ts,jsx,tsx,mdx,css}',
    './wp-blocks/**/*.{js,ts,jsx,tsx,mdx,css}',
  ],
  theme: {
    screens: {
      xs: '480px',
      sm: '600px',
      md: '782px',
      lg: '900px',
      xl: '1000px',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '2rem',
      },
      width: '100%',
      screens: {
        DEFAULT: '100%',
      },
    },
    colors: {
      blue: '#0071BC',
      'dark-blue': '#004F9F',
      gray: '#F2F2F2',
      white: '#ffffff',
      black: '#000000',
      red: '#E31C3D',
    },
    fontFamily: {
      sans: ['"Fira Sans"', 'sans-serif'],
    },

    extend: {
      fontFamily: {
        'fira-sans': ['"Fira Sans"', 'sans-serif'],
        'fira-code': ['"Fira Code"', 'monospace'],
      },
    },
  },
  safelist: [
    'md:flex-row-reverse',

    // animation classes
    'stepchange-enter-active',
    'stepchange-leave-active',
    'stepchange-enter-from',
    'stepchange-leave-to',

    // Medium+ screen sizes
    'md:w-1/2',
    'md:w-1/3',
    'md:w-2/3',
    'md:w-1/4',
    'md:w-2/4',
    'md:w-3/4',
    'md:w-1/5',
    'md:w-2/5',
    'md:w-3/5',
    'md:w-4/5',
    'md:w-1/6',
    'md:w-2/6',
    'md:w-3/6',
    'md:w-4/6',
    'md:w-5/6',
    'md:w-1/12',
    'md:w-2/12',
    'md:w-3/12',
    'md:w-4/12',
    'md:w-5/12',
    'md:w-6/12',
    'md:w-7/12',
    'md:w-8/12',
    'md:w-9/12',
    'md:w-10/12',
    'md:w-11/12',
    'md:w-full',
    'text-white',
    'text-black',
    {
      pattern: /grid-cols-/,
    },
    {
      pattern: /align-/,
    },
    {
      pattern: /self-/,
    },
  ],
  plugins: [
    plugin(function ({ addBase, theme }) {
      addBase({
        h1: {
          fontFamily: 'Fira Sans',
          fontSize: theme('fontSize.5xl'),
          lineHeight: '1',
          fontWeight: '800',
          margin: '2rem 0 1rem 0',
        },
        h2: {
          fontFamily: 'Fira Sans',
          fontSize: theme('fontSize.4xl'),
          lineHeight: '1',
          fontWeight: '800',
          margin: '2rem 0 1rem 0',
        },
        h3: {
          fontFamily: 'Fira Sans',
          fontSize: theme('fontSize.2xl'),
          lineHeight: '1',
          fontWeight: '800',
          margin: '2rem 0 1rem 0',
        },
        h4: {
          fontFamily: 'Fira Sans',
          fontSize: theme('fontSize.xl'),
          lineHeight: '1',
          fontWeight: '800',
          margin: '2rem 0 1rem 0',
        },
        h5: {
          fontFamily: 'Fira Sans',
          fontSize: theme('fontSize.lg'),
          lineHeight: '1',
          fontWeight: '800',
          margin: '2rem 0 1rem 0',
        },
        h6: {
          fontFamily: 'Fira Sans',
          fontSize: theme('fontSize.base'),
          lineHeight: '1',
          fontWeight: '800',
          margin: '2rem 0 1rem 0',
        },
        p: {
          fontSize: theme('fontSize.base'),
          lineHeight: '1.3',
          margin: '1rem 0',
        },
      })
    }),
    require('@tailwindcss/typography'),
  ],
}