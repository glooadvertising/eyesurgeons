/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./partials/*.php"],
  theme: {
    extend: {
      colors: {
        blue: {
          dark: '#0596c0',
          light: '#1dbae5'
        },
        gray: {
          dark: '#505050',
          light: '#959595',
          lighter: '#F2EEE4'
        }
      },
      spacing: {
        '25': '25vh',
        '30': '30vh',
        '40': '40vh',
        '50': '50vh',
        '70': '70vh',
        '80': '80vh'
      },
      width: {
        page: '1440px',
        blog: '1280px',
        '75': '75%'
      },
      borderWidth: {
        '8': '2rem',
      },
    },
  },
  plugins: [],
}

