"use strict";

(function e(t, n, r) {
  function s(o, u) {
    if (!n[o]) {
      if (!t[o]) {
        var a = typeof require == "function" && require;if (!u && a) return a(o, !0);if (i) return i(o, !0);var f = new Error("Cannot find module '" + o + "'");throw f.code = "MODULE_NOT_FOUND", f;
      }var l = n[o] = { exports: {} };t[o][0].call(l.exports, function (e) {
        var n = t[o][1][e];return s(n ? n : e);
      }, l, l.exports, e, t, n, r);
    }return n[o].exports;
  }var i = typeof require == "function" && require;for (var o = 0; o < r.length; o++) {
    s(r[o]);
  }return s;
})({ 1: [function (require, module, exports) {
    "use strict";

    includeHTML = function (_includeHTML) {
      function includeHTML() {
        return _includeHTML.apply(this, arguments);
      }

      includeHTML.toString = function () {
        return _includeHTML.toString();
      };

      return includeHTML;
    }(function () {
      var z = void 0,
          i = void 0,
          elmnt = void 0,
          file = void 0,
          xhttp = void 0;
      /*loop through a collection of all HTML elements:*/
      z = document.getElementsByTagName("*");
      xhttp = new XMLHttpRequest();
      var onReadyStateChange = xhttp.onreadystatechange = function () {
        if (undefined.readyState == 4) {
          if (undefined.status == 200) {
            elmnt.innerHTML = undefined.responseText;
          }
          if (undefined.status == 404) {
            elmnt.innerHTML = "Page not found.";
          }
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("include-html");
          includeHTML();
        }
      };
      for (i = 0; i < z.length; i++) {
        elmnt = z[i];
        /*search for elements with a certain atrribute:*/
        file = elmnt.getAttribute("include-html");
        if (file) {
          /*make an HTTP request using the attribute value as the file name:*/
          onReadyStateChange();

          xhttp.open("GET", file, true);
          xhttp.send();
          /*exit the function:*/
          return;
        }
      }
    });
  }, {}] }, {}, [1]);
//# sourceMappingURL=app.js.map