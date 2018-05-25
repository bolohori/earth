const gulp = require('gulp');
const postCSS = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const styles = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const normalize = require('postcss-normalize');

const sassOptions = {
  outputStyle: 'expanded',
  noCache: true
};

const postCSSPlugins = [
  normalize({
    forceImport: true,
  }),
  autoprefixer,
];

gulp.task('styles', () =>
  gulp
    .src('./src/styles/style.scss')
    .pipe(sourcemaps.init())
    .pipe(styles(sassOptions).on('error', styles.logError))
    .pipe(postCSS(postCSSPlugins))
    .on('error', (err) => {
      // eslint-disable-next-line no-console
      console.error(err.toString());
      this.emit('end');
    })
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./build/styles')));
