/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/es/pages/order-list.js":
/*!************************************!*\
  !*** ./src/es/pages/order-list.js ***!
  \************************************/
/***/ (() => {

  eval(`
    $('#order-list-table').DataTable();
  
    $('.order-checkbox').on('click', function() {
        updateSelectAllCheckbox();
    });
  
    $('#indeterminate-checkbox').on('click', function() {
        console.log('aaa');
        const isChecked = $(this).prop('checked');
        $('.order-checkbox').prop('checked', isChecked);
        updateSelectAllCheckbox();
    });
  
    function updateSelectAllCheckbox() {
        const totalItems = $('.order-checkbox').length;
        const checkedItems = $('.order-checkbox:checked').length;
  
        if (checkedItems === 0) {
            $('#indeterminate-checkbox').prop('checked', false);
            $('#indeterminate-checkbox').prop('indeterminate', false);
        } else if (checkedItems === totalItems) {
            $('#indeterminate-checkbox').prop('checked', true);
            $('#indeterminate-checkbox').prop('indeterminate', false);
        } else {
            $('#indeterminate-checkbox').prop('indeterminate', true);
        }
    }
  `);
  //# sourceURL=webpack://elstar/./src/es/pages/order-list.js?
  

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/es/pages/order-list.js"]();
/******/ 	
/******/ })()
;