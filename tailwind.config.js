/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./components/**/*.php"
  ],
  safelist: [
    {
      pattern: /col-span-(1|2|3|4|5|6|7|8|9|10|11|12)/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl']

    },
    {
      pattern: /grid-cols-(1|2|3|4|5|6|7|8|9|10|11|12)/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl']
    },
  ],
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1400px',
      '2xlx': '1600px'
    },
    extend: {
      colors: {
        'brand-orange': '#fd8204',
        'brand-lightgrey': '#9fa2a5',
        'brand-grey': '#464f53',
        'brand-darkgrey': '#343a40',
        'brand-black': '#222',
        'brand-white': '#fff',
      },
      fontSize: {
        h1: ['35px', '43px'],
        h2: ['35px', '40px'],
        h3: ['25px', '33px'],
        h4: ['25px', '30px'],
        p: ['16px', '25px'],
        'lg-h1': ['45px', '53px'],
        'lg-banner-h2': ['55px', '63px'],
        'lg-h3': ['30px', '35px'],
        'lg-banner-p': ['20px', '30px'],
        'banner-h2': ['30px', '38px'],
        'footer-sm-p': ['12px', '20px'],
        'scrolling-lg': ['48px', '55px'],
        'scrolling-sm': ['35px', '40px'],
      },
      fontFamily: {
        'Manrope': "'Manrope', 'sans-serif'"
      }
    },
  },
  plugins: [],
}


