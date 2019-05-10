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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: E:\\OS\\OSPanel\\domains\\BigRed\\resources\\js\\app.js: Identifier 'app' has already been declared (45:6)\n\n\u001b[0m \u001b[90m 43 | \u001b[39m\u001b[33mVue\u001b[39m\u001b[33m.\u001b[39mcomponent(\u001b[32m'posts'\u001b[39m\u001b[33m,\u001b[39m require(\u001b[32m'./components/Posts'\u001b[39m))\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 44 | \u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 45 | \u001b[39m\u001b[36mconst\u001b[39m app \u001b[33m=\u001b[39m \u001b[36mnew\u001b[39m \u001b[33mVue\u001b[39m({\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m      \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 46 | \u001b[39m    el\u001b[33m:\u001b[39m \u001b[32m'#app'\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 47 | \u001b[39m    store\u001b[0m\n\u001b[0m \u001b[90m 48 | \u001b[39m})\u001b[33m;\u001b[39m\u001b[0m\n    at Parser.raise (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:6322:17)\n    at ScopeHandler.checkRedeclarationInScope (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:3754:12)\n    at ScopeHandler.declareName (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:3720:12)\n    at Parser.checkLVal (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:8006:22)\n    at Parser.parseVarId (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:10441:10)\n    at Parser.parseVar (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:10412:12)\n    at Parser.parseVarStatement (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:10234:10)\n    at Parser.parseStatementContent (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:9830:21)\n    at Parser.parseStatement (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:9763:17)\n    at Parser.parseBlockOrModuleBlockBody (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:10340:25)\n    at Parser.parseBlockBody (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:10327:10)\n    at Parser.parseTopLevel (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:9692:10)\n    at Parser.parse (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:11209:17)\n    at parse (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\parser\\lib\\index.js:11245:38)\n    at parser (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:170:34)\n    at normalizeFile (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:138:11)\n    at runSync (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\core\\lib\\transformation\\index.js:44:43)\n    at runAsync (E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\core\\lib\\transformation\\index.js:35:14)\n    at E:\\OS\\OSPanel\\domains\\BigRed\\node_modules\\@babel\\core\\lib\\transform.js:34:34\n    at processTicksAndRejections (internal/process/task_queues.js:82:9)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! E:\OS\OSPanel\domains\BigRed\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! E:\OS\OSPanel\domains\BigRed\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });