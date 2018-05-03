const gulp = require('gulp');

gulp.task('build:dev', [
  'clean:build',
  'scripts',
  'styles',
  'copy:assets',
  'copy:php',
]);
