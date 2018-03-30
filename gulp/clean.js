const gulp = require('gulp');
const del = require('del');

gulp.task('clean:build', () => del.sync('./build'));
gulp.task('clean:dist', () => del.sync('./dist'));
