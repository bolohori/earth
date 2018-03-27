/**
 * Copy folders to another folder
 */
'use strict';

var gulp = require('gulp');

module.exports = function (options) {

  return function () {
    return gulp.src(options.foldersToCopy, { dot: true }).pipe(gulp.dest('./' + options.dest));
  };
};
//# sourceMappingURL=copy-folders.js.map