"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["account"],{

/***/ "./assets/account.js":
/*!***************************!*\
  !*** ./assets/account.js ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_account_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/account.css */ "./assets/styles/account.css");

var loginForm = document.getElementById("loginForm");
var regForm = document.getElementById("regForm");
var indicator = document.getElementById("indicator");
function register() {
  regForm.style.transform = "translateX(0px)";
  loginForm.style.transform = "translateX(0px)";
  indicator.style.transform = "translateX(100px)";
}
function login() {
  regForm.style.transform = "translateX(300px)";
  loginForm.style.transform = "translateX(300px)";
  indicator.style.transform = "translateX(0px)";
}

/***/ }),

/***/ "./assets/styles/account.css":
/*!***********************************!*\
  !*** ./assets/styles/account.css ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/account.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYWNjb3VudC5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7OztBQUE4QjtBQUU5QixJQUFJQSxTQUFTLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFdBQVcsQ0FBQztBQUNwRCxJQUFJQyxPQUFPLEdBQUdGLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFNBQVMsQ0FBQztBQUNoRCxJQUFJRSxTQUFTLEdBQUdILFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFdBQVcsQ0FBQztBQUdwRCxTQUFTRyxRQUFRQSxDQUFBLEVBQUU7RUFDZkYsT0FBTyxDQUFDRyxLQUFLLENBQUNDLFNBQVMsR0FBRyxpQkFBaUI7RUFDM0NQLFNBQVMsQ0FBQ00sS0FBSyxDQUFDQyxTQUFTLEdBQUksaUJBQWlCO0VBQzlDSCxTQUFTLENBQUNFLEtBQUssQ0FBQ0MsU0FBUyxHQUFJLG1CQUFtQjtBQUNwRDtBQUVBLFNBQVNDLEtBQUtBLENBQUEsRUFBRztFQUNiTCxPQUFPLENBQUNHLEtBQUssQ0FBQ0MsU0FBUyxHQUFHLG1CQUFtQjtFQUM3Q1AsU0FBUyxDQUFDTSxLQUFLLENBQUNDLFNBQVMsR0FBSSxtQkFBbUI7RUFDaERILFNBQVMsQ0FBQ0UsS0FBSyxDQUFDQyxTQUFTLEdBQUksaUJBQWlCO0FBQ2xEOzs7Ozs7Ozs7OztBQ2pCQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hY2NvdW50LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYWNjb3VudC5jc3M/NDllMyJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vc3R5bGVzL2FjY291bnQuY3NzJztcclxuXHJcbmxldCBsb2dpbkZvcm0gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImxvZ2luRm9ybVwiKTtcclxubGV0IHJlZ0Zvcm0gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInJlZ0Zvcm1cIik7XHJcbmxldCBpbmRpY2F0b3IgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImluZGljYXRvclwiKTtcclxuXHJcblxyXG5mdW5jdGlvbiByZWdpc3Rlcigpe1xyXG4gICAgcmVnRm9ybS5zdHlsZS50cmFuc2Zvcm0gPSBcInRyYW5zbGF0ZVgoMHB4KVwiO1xyXG4gICAgbG9naW5Gb3JtLnN0eWxlLnRyYW5zZm9ybSA9ICBcInRyYW5zbGF0ZVgoMHB4KVwiO1xyXG4gICAgaW5kaWNhdG9yLnN0eWxlLnRyYW5zZm9ybSA9ICBcInRyYW5zbGF0ZVgoMTAwcHgpXCI7XHJcbn1cclxuXHJcbmZ1bmN0aW9uIGxvZ2luICgpe1xyXG4gICAgcmVnRm9ybS5zdHlsZS50cmFuc2Zvcm0gPSBcInRyYW5zbGF0ZVgoMzAwcHgpXCI7XHJcbiAgICBsb2dpbkZvcm0uc3R5bGUudHJhbnNmb3JtID0gIFwidHJhbnNsYXRlWCgzMDBweClcIjtcclxuICAgIGluZGljYXRvci5zdHlsZS50cmFuc2Zvcm0gPSAgXCJ0cmFuc2xhdGVYKDBweClcIjtcclxufSIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJsb2dpbkZvcm0iLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwicmVnRm9ybSIsImluZGljYXRvciIsInJlZ2lzdGVyIiwic3R5bGUiLCJ0cmFuc2Zvcm0iLCJsb2dpbiJdLCJzb3VyY2VSb290IjoiIn0=