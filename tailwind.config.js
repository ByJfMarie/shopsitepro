module.exports = {
  purge: [

    './resources/**/*.blade.php',

    './resources/**/*.js',

    './resources/**/*.vue',

  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      textColor: {
        'vuejs': '#3FB984',
        'laravel': '#f72c1f',
        'tailwind': '#40C2D0'
        },
        backgroundColor: {
          'vuejs': '#f5f5f5',
          'laravel': '#f5f5f5',
          'primary': '#2d2e32',
          'secondary': '#25262A',
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
