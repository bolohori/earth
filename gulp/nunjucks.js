// const gulp = require('gulp');
// const nunjucksRender = require('gulp-nunjucks-render');
// const browsersync = require('browser-sync');
//
// gulp.task('nunjucks', () => {
//   console.log('Rendering nunjucks files..');
//   // Gets .html and .nunjucks files in pages
//   gulp.src('./src/pages/**/*.+(html|njk)')
//     // Renders template with nunjucks
//     .pipe(nunjucksRender({
//       path: ['./src/templates'],
//     }))
//     // .pipe(htmlclean())
//     // output files in app folder
//     .pipe(gulp.dest('./src/temp'));
// });
//
// // browser sync
// const syncOpts = {
//   open: false,
//   server: {
//     baseDir: './src/temp/',
//     index: 'index.html',
//   },
//   notify: true,
// };
//
// gulp.task('browsersync', () => browsersync.init(syncOpts));
