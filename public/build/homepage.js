"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["homepage"],{

/***/ "./assets/homepage.js":
/*!****************************!*\
  !*** ./assets/homepage.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_homepage_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/homepage.css */ "./assets/styles/homepage.css");

var body = document.querySelector('body');
var productCatalog = document.getElementById('productCatalog');
var mainDivCatalogs = document.createElement('div');
mainDivCatalogs.classList.add('divCatalogs');
body.appendChild(productCatalog);
productCatalog.append(mainDivCatalogs);
var divCatalogPoured = document.createElement('div');
var imgPouredNode = document.createElement('img');
var titleCatalogPoured = document.createElement('h5');
var titleCatalogPouredText = document.createTextNode('Bougie coulée');
imgPouredNode.src = './../public/build/images/imgproduct/coule.jpg';
divCatalogPoured.classList.add('pouredCatalogNode');
divCatalogPoured.appendChild(imgPouredNode);
divCatalogPoured.appendChild(titleCatalogPoured);
titleCatalogPoured.appendChild(titleCatalogPouredText);
mainDivCatalogs.appendChild(divCatalogPoured);
var divCatalogFondant = document.createElement('div');
var imgFondantNode = document.createElement('img');
var titleCatalogFondant = document.createElement('h5');
var titleCatalogFondantText = document.createTextNode('Fondants');
imgFondantNode.src = 'img/fondant.jpg';
divCatalogFondant.classList.add('fondantCatalogNode');
divCatalogFondant.appendChild(imgFondantNode);
divCatalogFondant.appendChild(titleCatalogFondant);
titleCatalogFondant.appendChild(titleCatalogFondantText);
mainDivCatalogs.appendChild(divCatalogFondant);
divCatalogPoured.addEventListener('click', function () {
  window.location.href = 'pagePoured.php';
});
divCatalogFondant.addEventListener('click', function () {
  window.location.href = 'pageFondant.php';
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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Q0FBQyxNQUFNLENBQUM7RUFDL0IsQ0FBQyxNQUFJO0lBQ0hpQixPQUFPLENBQUNsQixTQUFTLENBQUN3QixNQUFNLENBQUMsTUFBTSxDQUFDO0VBQ2xDO0FBR0YsQ0FBQyxDQUFDOzs7Ozs7Ozs7OztBQ3ZEUiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9ob21lcGFnZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2hvbWVwYWdlLmNzcz8yMjRkIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCAnLi9zdHlsZXMvaG9tZXBhZ2UuY3NzJztcclxuXHJcblxyXG5sZXQgYm9keSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2JvZHknKTtcclxubGV0IHByb2R1Y3RDYXRhbG9nID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3Byb2R1Y3RDYXRhbG9nJyk7XHJcblxyXG5sZXQgbWFpbkRpdkNhdGFsb2dzID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICBtYWluRGl2Q2F0YWxvZ3MuY2xhc3NMaXN0LmFkZCgnZGl2Q2F0YWxvZ3MnKTtcclxuICAgIGJvZHkuYXBwZW5kQ2hpbGQocHJvZHVjdENhdGFsb2cpO1xyXG4gICAgcHJvZHVjdENhdGFsb2cuYXBwZW5kKG1haW5EaXZDYXRhbG9ncylcclxuXHJcbmxldCBkaXZDYXRhbG9nUG91cmVkID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbmxldCBpbWdQb3VyZWROb2RlID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaW1nJyk7XHJcbmxldCB0aXRsZUNhdGFsb2dQb3VyZWQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdoNScpO1xyXG5sZXQgdGl0bGVDYXRhbG9nUG91cmVkVGV4dCA9IGRvY3VtZW50LmNyZWF0ZVRleHROb2RlKCdCb3VnaWUgY291bMOpZScpO1xyXG4gICAgaW1nUG91cmVkTm9kZS5zcmMgPSAnLi8uLi9wdWJsaWMvYnVpbGQvaW1hZ2VzL2ltZ3Byb2R1Y3QvY291bGUuanBnJztcclxuICAgIGRpdkNhdGFsb2dQb3VyZWQuY2xhc3NMaXN0LmFkZCgncG91cmVkQ2F0YWxvZ05vZGUnKTtcclxuICAgIGRpdkNhdGFsb2dQb3VyZWQuYXBwZW5kQ2hpbGQoaW1nUG91cmVkTm9kZSk7XHJcbiAgICBkaXZDYXRhbG9nUG91cmVkLmFwcGVuZENoaWxkKHRpdGxlQ2F0YWxvZ1BvdXJlZCk7XHJcbiAgICB0aXRsZUNhdGFsb2dQb3VyZWQuYXBwZW5kQ2hpbGQodGl0bGVDYXRhbG9nUG91cmVkVGV4dCk7XHJcbiAgICBtYWluRGl2Q2F0YWxvZ3MuYXBwZW5kQ2hpbGQoZGl2Q2F0YWxvZ1BvdXJlZCk7XHJcblxyXG5cclxubGV0IGRpdkNhdGFsb2dGb25kYW50ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbmxldCBpbWdGb25kYW50Tm9kZSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2ltZycpO1xyXG5sZXQgdGl0bGVDYXRhbG9nRm9uZGFudCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2g1Jyk7XHJcbmxldCB0aXRsZUNhdGFsb2dGb25kYW50VGV4dCA9IGRvY3VtZW50LmNyZWF0ZVRleHROb2RlKCdGb25kYW50cycpO1xyXG4gICAgaW1nRm9uZGFudE5vZGUuc3JjID0gJ2ltZy9mb25kYW50LmpwZyc7XHJcbiAgICBkaXZDYXRhbG9nRm9uZGFudC5jbGFzc0xpc3QuYWRkKCdmb25kYW50Q2F0YWxvZ05vZGUnKTtcclxuICAgIGRpdkNhdGFsb2dGb25kYW50LmFwcGVuZENoaWxkKGltZ0ZvbmRhbnROb2RlKTtcclxuICAgIGRpdkNhdGFsb2dGb25kYW50LmFwcGVuZENoaWxkKHRpdGxlQ2F0YWxvZ0ZvbmRhbnQpO1xyXG4gICAgdGl0bGVDYXRhbG9nRm9uZGFudC5hcHBlbmRDaGlsZCh0aXRsZUNhdGFsb2dGb25kYW50VGV4dCk7XHJcbiAgICBtYWluRGl2Q2F0YWxvZ3MuYXBwZW5kQ2hpbGQoZGl2Q2F0YWxvZ0ZvbmRhbnQpO1xyXG5cclxuICAgIFxyXG4gICAgICAgIGRpdkNhdGFsb2dQb3VyZWQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcclxuICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICdwYWdlUG91cmVkLnBocCc7XHJcbiAgICAgICAgfSk7XHJcbiAgICBcclxuICAgICAgICBkaXZDYXRhbG9nRm9uZGFudC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJ3BhZ2VGb25kYW50LnBocCc7XHJcbiAgICAgICAgfSk7XHJcbiAgICBcclxuICAgIFxyXG4gICAgICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdzY3JvbGwnLCAoKSA9PiB7XHJcbiAgICAgICAgY29uc3QgZWxlbWVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5hYm91dEltZyBpbWcnKTtcclxuICAgICAgICBjb25zdCBwb3NpdGlvbiA9IGVsZW1lbnQuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCkudG9wO1xyXG4gICAgICAgIGNvbnN0IHdpbmRvd0hlaWdodCA9IHdpbmRvdy5pbm5lckhlaWdodDtcclxuICAgICAgICBpZiAocG9zaXRpb24gPCB3aW5kb3dIZWlnaHQpIHtcclxuICAgICAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LmFkZCgnbW92ZScpO1xyXG4gICAgICAgIH1lbHNle1xyXG4gICAgICAgICAgZWxlbWVudC5jbGFzc0xpc3QucmVtb3ZlKCdtb3ZlJyk7XHJcbiAgICAgICAgfVxyXG5cclxuXHJcbiAgICAgIH0pOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJib2R5IiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwicHJvZHVjdENhdGFsb2ciLCJnZXRFbGVtZW50QnlJZCIsIm1haW5EaXZDYXRhbG9ncyIsImNyZWF0ZUVsZW1lbnQiLCJjbGFzc0xpc3QiLCJhZGQiLCJhcHBlbmRDaGlsZCIsImFwcGVuZCIsImRpdkNhdGFsb2dQb3VyZWQiLCJpbWdQb3VyZWROb2RlIiwidGl0bGVDYXRhbG9nUG91cmVkIiwidGl0bGVDYXRhbG9nUG91cmVkVGV4dCIsImNyZWF0ZVRleHROb2RlIiwic3JjIiwiZGl2Q2F0YWxvZ0ZvbmRhbnQiLCJpbWdGb25kYW50Tm9kZSIsInRpdGxlQ2F0YWxvZ0ZvbmRhbnQiLCJ0aXRsZUNhdGFsb2dGb25kYW50VGV4dCIsImFkZEV2ZW50TGlzdGVuZXIiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsImhyZWYiLCJlbGVtZW50IiwicG9zaXRpb24iLCJnZXRCb3VuZGluZ0NsaWVudFJlY3QiLCJ0b3AiLCJ3aW5kb3dIZWlnaHQiLCJpbm5lckhlaWdodCIsInJlbW92ZSJdLCJzb3VyY2VSb290IjoiIn0=