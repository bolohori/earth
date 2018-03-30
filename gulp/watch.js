const gulp = require('gulp');
const watch = require('gulp-watch');
const browserSync = require('browser-sync').create();

const { reload, stream } = browserSync;

gulp.task('watch', ['build:dev'], () => {
  console.log('watching dev');
  browserSync.init({
    notify: false,
    server: {
      baseDir: './build',
    },
  });
});
// watch('./src/pages/**/*.html', () => {
//   gulp.start('htmlRefresh');
// });
//
watch('./src/scripts/**/*.js', () => {
  console.log('watching Scripts');
  gulp.start('scriptsRefresh');
});

watch('./src/styles/**/*.scss', () => {
  console.log('watching Styles');
  gulp.start('cssInject');
});

gulp.task('cssInject', ['styles'], () =>
  gulp.src('./build/styles/style.css').pipe(stream()));

// gulp.task('htmlRefresh', () => {
//   reload();
// });
gulp.task('scriptsRefresh', ['scripts'], () => {
  reload();
});
// gulp.task('watch:nunjucks', ['nunjucks'], () => {
//   watch('./src/pages/**/*.+(html|njk)  ', () => gulp.task('nunjucks'));
// });

