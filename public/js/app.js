/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

throw new Error("Module build failed: TypeError: this.setDynamic is not a function\n    at PluginPass.pre (C:\\xampp\\htdocs\\MuaReProject\\node_modules\\babel-plugin-transform-runtime\\lib\\index.js:31:12)\n    at transformFile (C:\\xampp\\htdocs\\MuaReProject\\node_modules\\@babel\\core\\lib\\transformation\\index.js:78:27)\n    at runSync (C:\\xampp\\htdocs\\MuaReProject\\node_modules\\@babel\\core\\lib\\transformation\\index.js:45:3)\n    at transformSync (C:\\xampp\\htdocs\\MuaReProject\\node_modules\\@babel\\core\\lib\\transform.js:43:38)\n    at Object.transform (C:\\xampp\\htdocs\\MuaReProject\\node_modules\\@babel\\core\\lib\\transform.js:22:38)\n    at transpile (C:\\xampp\\htdocs\\MuaReProject\\node_modules\\babel-loader\\lib\\index.js:55:20)\n    at C:\\xampp\\htdocs\\MuaReProject\\node_modules\\babel-loader\\lib\\fs-cache.js:116:18\n    at ReadFileContext.callback (C:\\xampp\\htdocs\\MuaReProject\\node_modules\\babel-loader\\lib\\fs-cache.js:36:21)\n    at FSReqWrap.readFileAfterOpen [as oncomplete] (fs.js:238:13)");

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);