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
/******/ 	return __webpack_require__(__webpack_require__.s = 35);
/******/ })
/************************************************************************/
/******/ ({

/***/ 35:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(36);


/***/ }),

/***/ 36:
/***/ (function(module, exports) {


$(document).ready(function () {
    /*Design Page Slidertwo**/
    $('.DesignSlideTwo').owlCarousel({
        items: 1,
        loop: false,
        nav: false,
        dots: false,
        pagination: true,
        touchDrag: true,
        responsiveClass: true,
        navigationText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        navigation: true,
        autoPlay: false,
        mouseDrag: true,
        responsive: {
            0: {
                items: 1
            },
            640: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });
    /*DesignPage Slider Three Start here*/
    $('.DSliderThree').owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
        pagination: true,
        touchDrag: false,
        responsiveClass: true,
        navigationText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        navigation: true,
        autoPlay: false,
        mouseDrag: true,
        responsive: {
            0: {
                items: 1
            },
            640: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    /*DesignPage Slider Three End here*/
    /*FixHeader Start By Shagor */
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 0) {
            $(".Mfix").addClass('fixedHeader');
        } else {
            $(".Mfix").removeClass('fixedHeader');
        }
    });

    /*FixHeader End By Shagor */

    $(".MobileMenu").on('click', function () {
        $(".Menu > ul").slideToggle('slow');
    });
    $(".SubSer").on('click', function () {
        $(".Menu ul li .Submenu").slideToggle('slow');
    });

    /*MobileMenu End By Shagor */

    /*back to top by shagor*/
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 1660) {
            $(".BackTo").fadeIn('slow');
        } else {
            $(".BackTo").fadeOut('slow');
        }
    });
    $("body, html").on("click", ".BackTo", function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 800);
    });
});

/***/ })

/******/ });