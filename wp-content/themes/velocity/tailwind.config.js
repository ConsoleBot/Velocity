import safelist from './tailwind.safelist.json';

module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './assets/**/*.js',
    './assets/**/*.scss',
    './assets/**/*.css',
  ],
  safelist,
  theme: {
    extend: {},
  },
  plugins: [],
  experimental: {
    extendedSpacingScale: true,
    hexAlpha: true
  }
};
