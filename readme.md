# Gulp Starter Kit for Frontend Projects

This Gulp starter kit will help you do frontend tasks like:

* compiling ES6+ code, so you can use next generation JavaScript
* compiling and autoprefixing your Sass files
* optimising your images, CSS and JavaScript files


## What's Included

* [Gulp.js](https://github.com/gulpjs/gulp) task runner
* [Webpack](https://github.com/webpack/webpack) module bundler
* [Babel](https://github.com/babel/babel) compiler
* [ESLint](https://github.com/eslint/eslint) linter with Airbnb's [base config](https://www.npmjs.com/package/eslint-config-airbnb-base)
* [Sass](http://sass-lang.com) with [PostCSS](https://github.com/postcss/postcss)' [Autoprefixer](https://github.com/postcss/autoprefixer)

## Install and Build

You can use either `yarn` or `npm`:


#### Install dependencies

```bash
yarn install
# OR
npm install
```

#### Build production bundle

It uglifies JS, minifies CSS and images, replaces references to non-optimized scripts and stylesheets in HTML files and copies everything necessary to the `dist` folder - ready to upload.

```bash
yarn build
# OR
npm run build
```

#### Preview production build

It's the same as the build task above but it also starts a server so you can check your work.

```bash
yarn preview
# OR
npm run preview
```
