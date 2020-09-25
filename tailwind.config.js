module.exports = {
  purge: [],
  theme: {
    extend: {
      screens: {
        'xxl': {'min': '1440px'}
      },
    	colors: {
        'custom-background': '#5CDB95',
        'custom-background-backup': '#01e08f',
        'custom-main-text': '#EDF5E1',
        'custom-text': '#05386B',
        'custom-dark-green': '#379683',
      },
      fontSize: {
          '6.5xl': '6rem',
          '7xl': '9rem',
          '7.5xl': '10rem',
          '8xl': '11rem',
      },
      fontFamily: {
        'title-main': ['AldotheApache', 'Menlo', 'Monaco', 'Consolas', "Liberation Mono", "Courier New", 'monospace'],
      }
    },
  },
  variants: {},
  plugins: [],
}
