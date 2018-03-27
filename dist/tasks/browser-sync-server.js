/**
 * Start browserSync server
 */
'use strict';

var gulp = require('gulp'),
    fs = require('fs');

module.exports = function (options) {

  return function () {
    // If index.html exist - open it, else show folder
    var listDirectory = fs.existsSync(options.mainHtml) ? false : true;

    options.browserSync.init({
      notify: false,
      server: {
        baseDir: "./",
        directory: listDirectory
      },
      snippetOptions: {
        // Provide a custom Regex for inserting the snippet
        rule: {
          match: /$/i,
          fn: function fn(snippet, match) {
            return snippet + match;
          }
        }
      },
      port: 8080
    });
  };
};
//# sourceMappingURL=browser-sync-server.js.map