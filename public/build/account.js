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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYWNjb3VudC5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7OztBQUE4QjtBQUU5QixJQUFJQSxTQUFTLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFdBQVcsQ0FBQztBQUNwRCxJQUFJQyxPQUFPLEdBQUdGLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFNBQVMsQ0FBQztBQUNoRCxJQUFJRSxTQUFTLEdBQUdILFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFdBQVcsQ0FBQztBQUdwRCxTQUFTRyxRQUFRQSxDQUFBLEVBQUU7RUFDZkYsT0FBTyxDQUFDRyxLQUFLLENBQUNDLFNBQVMsR0FBRyxpQkFBaUI7RUFDM0NQLFNBQVMsQ0FBQ00sS0FBSyxDQUFDQyxTQUFTLEdBQUksaUJBQWlCO0VBQzlDSCxTQUFTLENBQUNFLEtBQUssQ0FBQ0MsU0FBUyxHQUFJLG1CQUFtQjtBQUNwRDtBQUVBLFNBQVNDLEtBQUtBLENBQUEsRUFBRztFQUNiTCxPQUFPLENBQUNHLEtBQUssQ0FBQ0MsU0FBUyxHQUFHLG1CQUFtQjtFQUM3Q1AsU0FBUyxDQUFDTSxLQUFLLENBQUNDLFNBQVMsR0FBSSxtQkFBbUI7RUFDaERILFNBQVMsQ0FBQ0UsS0FBSyxDQUFDQyxTQUFTLEdBQUksaUJBQWlCO0FBQ2xEOzs7Ozs7Ozs7OztBQ2pCQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hY2NvdW50LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYWNjb3VudC5jc3MiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL3N0eWxlcy9hY2NvdW50LmNzcyc7XHJcblxyXG5sZXQgbG9naW5Gb3JtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJsb2dpbkZvcm1cIik7XHJcbmxldCByZWdGb3JtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJyZWdGb3JtXCIpO1xyXG5sZXQgaW5kaWNhdG9yID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJpbmRpY2F0b3JcIik7XHJcblxyXG5cclxuZnVuY3Rpb24gcmVnaXN0ZXIoKXtcclxuICAgIHJlZ0Zvcm0uc3R5bGUudHJhbnNmb3JtID0gXCJ0cmFuc2xhdGVYKDBweClcIjtcclxuICAgIGxvZ2luRm9ybS5zdHlsZS50cmFuc2Zvcm0gPSAgXCJ0cmFuc2xhdGVYKDBweClcIjtcclxuICAgIGluZGljYXRvci5zdHlsZS50cmFuc2Zvcm0gPSAgXCJ0cmFuc2xhdGVYKDEwMHB4KVwiO1xyXG59XHJcblxyXG5mdW5jdGlvbiBsb2dpbiAoKXtcclxuICAgIHJlZ0Zvcm0uc3R5bGUudHJhbnNmb3JtID0gXCJ0cmFuc2xhdGVYKDMwMHB4KVwiO1xyXG4gICAgbG9naW5Gb3JtLnN0eWxlLnRyYW5zZm9ybSA9ICBcInRyYW5zbGF0ZVgoMzAwcHgpXCI7XHJcbiAgICBpbmRpY2F0b3Iuc3R5bGUudHJhbnNmb3JtID0gIFwidHJhbnNsYXRlWCgwcHgpXCI7XHJcbn0iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsibG9naW5Gb3JtIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInJlZ0Zvcm0iLCJpbmRpY2F0b3IiLCJyZWdpc3RlciIsInN0eWxlIiwidHJhbnNmb3JtIiwibG9naW4iXSwic291cmNlUm9vdCI6IiJ9