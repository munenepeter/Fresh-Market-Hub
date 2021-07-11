module.exports = {
  purge: {
    enabled: true,
    content: [
    'views/**/*.php',
    'views/*.php',
    ],
    options: {
      keyframes: true,
    },
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
