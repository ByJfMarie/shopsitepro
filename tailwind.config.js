module.exports = {
  purge: [

    './resources/**/*.blade.php',

    './resources/**/*.js',

    './resources/**/*.vue',

  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        screens: {
          'phone': '415px',
        },
        textColor: {
          'vuejs': '#3FB984',
          'laravel': '#f72c1f',
          'tailwind': '#40C2D0',
          'tertiary': '#9CA3AF',
          'primary': '#2d2e32',
          'secondary': '#25262A',
          'block': "#37383c",
        },
        height: {
          '100': '30rem',
          '120': '45rem'
        },
        width: {
          '3/10': '31.5%',
        },
        backgroundColor: {
          'vuejs': '#f5f5f5',
          'laravel': '#f5f5f5',
          'primary': '#2d2e32',
          'secondary': '#25262A',
          'tertiary': '#424245',
          'block': "#37383c",
          'tailwind': '#40C2D0',
        },
        gradientColorStops: {
          'vuejs': '#F76E1F',
          'laravel': '#9150A6',
          'buttonColor1' : '#3FB984',
          'buttonColor2' : '#40C2D0',
        },
        borderColor: {
          'tertiary': '#424245',
          'primary': '#2d2e32', 
          'laravel': '#f72c1f',
          'tailwind': '#40C2D0',
        },
        fontFamily: {
          'Lato': 'Lato, sans-serif'
        }
      }
      


  },
  variants: {
    extend: {},
  },
  plugins: [],
}
