/**
 * Clean image build directory
 */
'use strict';

var gulp = require('gulp'),
    del = require('del');

module.exports = function (options) {

  return function () {
    return del([options.src + '/images/']);
  };
};
//# sourceMappingURL=image-clean.js.map