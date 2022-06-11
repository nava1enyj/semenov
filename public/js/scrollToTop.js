/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/scrollToTop.js":
/*!*************************************!*\
  !*** ./resources/js/scrollToTop.js ***!
  \*************************************/
/***/ (() => {

eval("//Get the button\nvar mybutton = document.getElementById(\"btn-back-to-top\"); // When the user scrolls down 20px from the top of the document, show the button\n\nwindow.onscroll = function () {\n  scrollFunction();\n};\n\nfunction scrollFunction() {\n  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {\n    mybutton.style.display = \"block\";\n  } else {\n    mybutton.style.display = \"none\";\n  }\n} // When the user clicks on the button, scroll to the top of the document\n\n\nmybutton.addEventListener(\"click\", backToTop);\n\nfunction backToTop() {\n  document.body.scrollTop = 0;\n  document.documentElement.scrollTop = 0;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJteWJ1dHRvbiIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJ3aW5kb3ciLCJvbnNjcm9sbCIsInNjcm9sbEZ1bmN0aW9uIiwiYm9keSIsInNjcm9sbFRvcCIsImRvY3VtZW50RWxlbWVudCIsInN0eWxlIiwiZGlzcGxheSIsImFkZEV2ZW50TGlzdGVuZXIiLCJiYWNrVG9Ub3AiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3Njcm9sbFRvVG9wLmpzPzQ2YTgiXSwic291cmNlc0NvbnRlbnQiOlsiLy9HZXQgdGhlIGJ1dHRvblxubGV0IG15YnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJidG4tYmFjay10by10b3BcIik7XG5cbi8vIFdoZW4gdGhlIHVzZXIgc2Nyb2xscyBkb3duIDIwcHggZnJvbSB0aGUgdG9wIG9mIHRoZSBkb2N1bWVudCwgc2hvdyB0aGUgYnV0dG9uXG53aW5kb3cub25zY3JvbGwgPSBmdW5jdGlvbiAoKSB7XG4gICAgc2Nyb2xsRnVuY3Rpb24oKTtcbn07XG5cbmZ1bmN0aW9uIHNjcm9sbEZ1bmN0aW9uKCkge1xuICAgIGlmIChcbiAgICAgICAgZG9jdW1lbnQuYm9keS5zY3JvbGxUb3AgPiAyMCB8fFxuICAgICAgICBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuc2Nyb2xsVG9wID4gMjBcbiAgICApIHtcbiAgICAgICAgbXlidXR0b24uc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcbiAgICB9IGVsc2Uge1xuICAgICAgICBteWJ1dHRvbi5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG4gICAgfVxufVxuLy8gV2hlbiB0aGUgdXNlciBjbGlja3Mgb24gdGhlIGJ1dHRvbiwgc2Nyb2xsIHRvIHRoZSB0b3Agb2YgdGhlIGRvY3VtZW50XG5teWJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgYmFja1RvVG9wKTtcbmZ1bmN0aW9uIGJhY2tUb1RvcCgpIHtcbiAgICBkb2N1bWVudC5ib2R5LnNjcm9sbFRvcCA9IDA7XG4gICAgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNjcm9sbFRvcCA9IDA7XG59XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0EsSUFBSUEsUUFBUSxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsaUJBQXhCLENBQWYsQyxDQUVBOztBQUNBQyxNQUFNLENBQUNDLFFBQVAsR0FBa0IsWUFBWTtFQUMxQkMsY0FBYztBQUNqQixDQUZEOztBQUlBLFNBQVNBLGNBQVQsR0FBMEI7RUFDdEIsSUFDSUosUUFBUSxDQUFDSyxJQUFULENBQWNDLFNBQWQsR0FBMEIsRUFBMUIsSUFDQU4sUUFBUSxDQUFDTyxlQUFULENBQXlCRCxTQUF6QixHQUFxQyxFQUZ6QyxFQUdFO0lBQ0VQLFFBQVEsQ0FBQ1MsS0FBVCxDQUFlQyxPQUFmLEdBQXlCLE9BQXpCO0VBQ0gsQ0FMRCxNQUtPO0lBQ0hWLFFBQVEsQ0FBQ1MsS0FBVCxDQUFlQyxPQUFmLEdBQXlCLE1BQXpCO0VBQ0g7QUFDSixDLENBQ0Q7OztBQUNBVixRQUFRLENBQUNXLGdCQUFULENBQTBCLE9BQTFCLEVBQW1DQyxTQUFuQzs7QUFDQSxTQUFTQSxTQUFULEdBQXFCO0VBQ2pCWCxRQUFRLENBQUNLLElBQVQsQ0FBY0MsU0FBZCxHQUEwQixDQUExQjtFQUNBTixRQUFRLENBQUNPLGVBQVQsQ0FBeUJELFNBQXpCLEdBQXFDLENBQXJDO0FBQ0giLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2Nyb2xsVG9Ub3AuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/scrollToTop.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/scrollToTop.js"]();
/******/ 	
/******/ })()
;