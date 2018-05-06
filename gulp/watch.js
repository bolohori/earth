const gulp = require('gulp');
const watch = require('gulp-watch');
const browserSync = require('browser-sync').create();

const { reload, stream } = browserSync;

gulp.task('watch', ['build:dev'], () => {
  console.log('watching dev');
  browserSync.init({
    proxy: 'localhost/earth.com/build/',
  });``
});
watch(['./src/*.php', './src/**/*.php'], () => {
  gulp.start('copy:php');
  browserSync.reload();
});

watch('./src/scripts/**/*.js', onchange = () => {
  gulp.run('scripts');
  browserSync.reload();
});

watch('./src/styles/**/*.scss', onchange = () => {
  gulp.run('styles');
  browserSync.reload();
});

gulp.task('templateRefresh', ['copy:php'], () => {
  browserSync.reload();
});
