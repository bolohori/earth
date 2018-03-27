/**
 * Clean production folder
 */
'use strict';

var gulp = require('gulp'),
    del = require('del');

module.exports = function (options) {

  return function () {
    return del(['./' + options.src + '/'], { dot: true });
  };
};
//# sourceMappingURL=clean-production.js.map