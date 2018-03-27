/**
 * Clean build folder
 */
'use strict';

var gulp = require('gulp'),
    del = require('del');

module.exports = function (options) {

  return function () {
    return del([options.src + '/**/*', '!' + options.src + '/images/', '!' + options.src + '/images/**'], { dot: true });
  };
};
//# sourceMappingURL=clean-build.js.map