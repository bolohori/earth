const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
// const htmlmin = require('gulp-htmlmin');
const imagemin = require('gulp-imagemin');
const usemin = require('gulp-usemin');
const rev = require('gulp-rev');

gulp.task('optimizeImages', ['clean:dist'], () =>
  gulp
    .src([
      './src/assets/images/**/*',
      '!./src/assets/images/icons',
      '!./src/assets/images/icons/**/*',
    ])
    .pipe(imagemin({
      interlaced: true,
      multipass: true,
      progressive: true,
    }))
    .pipe(gulp.dest('./dist/assets/')));

gulp.task('useminTrigger', ['clean:dist'], () => {
  gulp.start('usemin');
});

gulp.task('usemin', ['styles', 'scripts:dist'], () =>
  gulp
    .src('./build/**/*.{php,css,js}')
    .pipe(usemin({
      css: [() => rev(), () => cleanCSS()],
      // html: [() => htmlmin({ collapseWhitespace: true })],
      js: [() => rev()],
    }))
    .pipe(gulp.dest('./dist')));

gulp.task('build:dist', [
  'clean:dist',
  'copy:general',
  'copy:php',
  'optimizeImages',
  'useminTrigger',
]);
