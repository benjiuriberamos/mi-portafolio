/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/laravel.js ***!
  \*********************************/
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
// require('./bootstrap');
var Auto = /*#__PURE__*/_createClass(function Auto() {
  var _this = this;
  _classCallCheck(this, Auto);
  _defineProperty(this, "positionX", 0);
  _defineProperty(this, "positionY", 0);
  _defineProperty(this, "statusAutoX", true);
  _defineProperty(this, "statusAutoY", true);
  _defineProperty(this, "element", document.getElementById('auto'));
  _defineProperty(this, "widthElement", this.element.offsetWidth);
  _defineProperty(this, "heightElement", this.element.offsetHeight);
  _defineProperty(this, "widthParentElement", this.element.parentNode.offsetWidth);
  _defineProperty(this, "heightParentElement", this.element.parentNode.offsetHeight);
  _defineProperty(this, "moveX", 1);
  _defineProperty(this, "moveY", 1);
  _defineProperty(this, "codeProcess", void 0);
  _defineProperty(this, "desplazarX", function () {
    if (_this.statusAutoX) {
      _this.positionX += _this.moveX;
      _this.element.style.left = _this.positionX + 'px';
    } else {
      _this.positionX -= _this.moveX;
      _this.element.style.left = _this.positionX + 'px';
    }
    if (_this.widthElement + _this.positionX >= _this.widthParentElement) {
      _this.statusAutoX = false;
    }
    if (_this.positionX <= 0) {
      _this.statusAutoX = true;
    }
    // console.log("se mueve al x")
  });
  _defineProperty(this, "desplazarY", function () {
    if (_this.statusAutoY) {
      _this.positionY += _this.moveY;
      _this.element.style.top = _this.positionY + 'px';
    } else {
      _this.positionY -= _this.moveY;
      _this.element.style.top = _this.positionY + 'px';
    }
    if (_this.heightElement + _this.positionY >= _this.heightParentElement) {
      _this.statusAutoY = false;
    }
    if (_this.positionY <= 0) {
      _this.statusAutoY = true;
    }
  });
  _defineProperty(this, "activar", function () {
    if (!_this.codeProcess) {
      _this.codeProcess = setInterval(function () {
        cajaAuto.desplazarX();
        cajaAuto.desplazarY();
      }, 20);
    }
  });
  _defineProperty(this, "desactivar", function () {
    clearInterval(_this.codeProcess);
    _this.codeProcess = null;
  });
});
var cajaAuto = new Auto();
cajaAuto.activar();
document.querySelector("#btn-stop").addEventListener("click", function (e) {
  e.preventDefault();
  cajaAuto.desactivar();
});
document.querySelector("#btn-start").addEventListener("click", function (e) {
  e.preventDefault();
  cajaAuto.activar();
});
/******/ })()
;