const gulp = require('gulp');

gulp.task('copy:assets', () =>
  gulp
    .src('./src/assets/**/*')
    .pipe(gulp.dest('./build//assets/')));
gulp.task('copy:php', () =>
  gulp
    .src(['./src/*.php', './src/**/*.php'])
    .pipe(gulp.dest('./build/')));
gulp.task('copy:general', ['clean:dist'], () =>
  gulp
    .src([
      './src/**/*',
      './src/**/*',
      '!./src/data',
      '!./src/data/**',
      '!./src/images',
      '!./src/images/**',
      '!./src/includes',
      '!./src/includes/**',
      '!./src/scripts',
      '!./src/scripts/**',
      '!./src/styles',
      '!./src/styles/**',
      '!./build/*',
      '!./build/**',
    ])
    .pipe(gulp.dest('./build/')));
