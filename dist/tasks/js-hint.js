/**
 * Hint JS
 */
'use strict';

var gulp = require('gulp'),
    jshint = require('gulp-jshint'),
    notify = require('gulp-notify');

module.exports = function (options) {

  return function (cb) {
    gulp.src('./' + options.src + '/js/**/*.js').pipe(jshint({
      'esversion': 6
    })).pipe(notify(function (file) {
      if (file.jshint.success) {
        return false;
      }

      var errors = file.jshint.results.map(function (data) {
        if (data.error) {
          return ' (' + data.error.line + ': ' + data.error.character + ') ' + data.error.reason;
        }
      }).join("\n");

      var errorWord = file.jshint.results.length == 1 ? 'error' : 'errors';

      return '\x1B[31m \n************ JSHint ************\n\n ' + file.relative + ' (' + file.jshint.results.length + ' ' + errorWord + ')\n\n' + errors + '\n\n********************************';
    }));

    cb();
  };
};
//# sourceMappingURL=js-hint.js.map