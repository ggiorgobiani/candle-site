"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["homepage"],{

/***/ "./assets/homepage.js":
/*!****************************!*\
  !*** ./assets/homepage.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_homepage_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/homepage.css */ "./assets/styles/homepage.css");

var pouredCatalogNode = document.getElementsByClassName('pouredCatalogNode')[0];
var fondantCatalogNode = document.getElementsByClassName('fondantCatalogNode')[0];
pouredCatalogNode.addEventListener('click', function () {
  window.location.href = '/poured';
});
fondantCatalogNode.addEventListener('click', function () {
  window.location.href = '/fondant';
});
window.addEventListener('scroll', function () {
  var element = document.querySelector('.aboutImg img');
  var position = element.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;
  if (position < windowHeight) {
    element.classList.add('move');
  } else {
    element.classList.remove('move');
  }
});

/***/ }),

/***/ "./assets/styles/homepage.css":
/*!************************************!*\
  !*** ./assets/styles/homepage.css ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/homepage.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiaG9tZXBhZ2UuanMiLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7QUFBK0I7QUFHL0IsSUFBSUEsaUJBQWlCLEdBQUdDLFFBQVEsQ0FBQ0Msc0JBQXNCLENBQUMsbUJBQW1CLENBQUMsQ0FBQyxDQUFDLENBQUM7QUFDL0UsSUFBSUMsa0JBQWtCLEdBQUdGLFFBQVEsQ0FBQ0Msc0JBQXNCLENBQUMsb0JBQW9CLENBQUMsQ0FBQyxDQUFDLENBQUM7QUFFakZGLGlCQUFpQixDQUFDSSxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBVztFQUNyREMsTUFBTSxDQUFDQyxRQUFRLENBQUNDLElBQUksR0FBRyxTQUFTO0FBQ2xDLENBQUMsQ0FBQztBQUVGSixrQkFBa0IsQ0FBQ0MsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQVc7RUFDcERDLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxJQUFJLEdBQUcsVUFBVTtBQUNyQyxDQUFDLENBQUM7QUFHRkYsTUFBTSxDQUFDRCxnQkFBZ0IsQ0FBQyxRQUFRLEVBQUUsWUFBTTtFQUN0QyxJQUFNSSxPQUFPLEdBQUdQLFFBQVEsQ0FBQ1EsYUFBYSxDQUFDLGVBQWUsQ0FBQztFQUN2RCxJQUFNQyxRQUFRLEdBQUdGLE9BQU8sQ0FBQ0cscUJBQXFCLENBQUMsQ0FBQyxDQUFDQyxHQUFHO0VBQ3BELElBQU1DLFlBQVksR0FBR1IsTUFBTSxDQUFDUyxXQUFXO0VBQ3ZDLElBQUlKLFFBQVEsR0FBR0csWUFBWSxFQUFFO0lBQzNCTCxPQUFPLENBQUNPLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLE1BQU0sQ0FBQztFQUMvQixDQUFDLE1BQUk7SUFDSFIsT0FBTyxDQUFDTyxTQUFTLENBQUNFLE1BQU0sQ0FBQyxNQUFNLENBQUM7RUFDbEM7QUFHRixDQUFDLENBQUM7Ozs7Ozs7Ozs7O0FDMUJGIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2hvbWVwYWdlLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvaG9tZXBhZ2UuY3NzPzIyNGQiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL3N0eWxlcy9ob21lcGFnZS5jc3MnO1xyXG5cclxuXHJcbmxldCBwb3VyZWRDYXRhbG9nTm9kZSA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ3BvdXJlZENhdGFsb2dOb2RlJylbMF07XHJcbmxldCBmb25kYW50Q2F0YWxvZ05vZGUgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdmb25kYW50Q2F0YWxvZ05vZGUnKVswXTtcclxuXHJcbnBvdXJlZENhdGFsb2dOb2RlLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XHJcbiAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnL3BvdXJlZCc7XHJcbn0pO1xyXG5cclxuZm9uZGFudENhdGFsb2dOb2RlLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XHJcbiAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICcvZm9uZGFudCc7XHJcbn0pO1xyXG5cclxuICAgIFxyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgKCkgPT4ge1xyXG4gIGNvbnN0IGVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuYWJvdXRJbWcgaW1nJyk7XHJcbiAgY29uc3QgcG9zaXRpb24gPSBlbGVtZW50LmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLnRvcDtcclxuICBjb25zdCB3aW5kb3dIZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XHJcbiAgaWYgKHBvc2l0aW9uIDwgd2luZG93SGVpZ2h0KSB7XHJcbiAgICBlbGVtZW50LmNsYXNzTGlzdC5hZGQoJ21vdmUnKTtcclxuICB9ZWxzZXtcclxuICAgIGVsZW1lbnQuY2xhc3NMaXN0LnJlbW92ZSgnbW92ZScpO1xyXG4gIH1cclxuXHJcblxyXG59KTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsicG91cmVkQ2F0YWxvZ05vZGUiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJmb25kYW50Q2F0YWxvZ05vZGUiLCJhZGRFdmVudExpc3RlbmVyIiwid2luZG93IiwibG9jYXRpb24iLCJocmVmIiwiZWxlbWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJwb3NpdGlvbiIsImdldEJvdW5kaW5nQ2xpZW50UmVjdCIsInRvcCIsIndpbmRvd0hlaWdodCIsImlubmVySGVpZ2h0IiwiY2xhc3NMaXN0IiwiYWRkIiwicmVtb3ZlIl0sInNvdXJjZVJvb3QiOiIifQ==