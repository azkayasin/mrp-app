'use strict';

exports.__esModule = true;

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _get = function get(object, property, receiver) { if (object === null) object = Function.prototype; var desc = Object.getOwnPropertyDescriptor(object, property); if (desc === undefined) { var parent = Object.getPrototypeOf(object); if (parent === null) { return undefined; } else { return get(parent, property, receiver); } } else if ("value" in desc) { return desc.value; } else { var getter = desc.get; if (getter === undefined) { return undefined; } return getter.call(receiver); } };

var _numbro = require('numbro');

var _numbro2 = _interopRequireDefault(_numbro);

var _textEditor = require('./textEditor');

var _textEditor2 = _interopRequireDefault(_textEditor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

/**
 * @private
 * @editor NumericEditor
 * @class NumericEditor
 * @dependencies TextEditor numbro
 */
var NumericEditor = function (_TextEditor) {
  _inherits(NumericEditor, _TextEditor);

  function NumericEditor() {
    _classCallCheck(this, NumericEditor);

    return _possibleConstructorReturn(this, (NumericEditor.__proto__ || Object.getPrototypeOf(NumericEditor)).apply(this, arguments));
  }

  _createClass(NumericEditor, [{
    key: 'beginEditing',

    /**
     * @param {*} initialValue
     */
    value: function beginEditing(initialValue) {
      if (typeof initialValue === 'undefined' && this.originalValue) {
        var decimalDelimiter = _numbro2.default.cultureData().delimiters.decimal;
        var numericFormat = this.cellProperties.numericFormat;
        var cellCulture = numericFormat && numericFormat.culture;

        if (typeof cellCulture !== 'undefined') {
          _numbro2.default.culture(cellCulture);
        }

        initialValue = ('' + this.originalValue).replace('.', decimalDelimiter);
      }

      _get(NumericEditor.prototype.__proto__ || Object.getPrototypeOf(NumericEditor.prototype), 'beginEditing', this).call(this, initialValue);
    }
  }]);

  return NumericEditor;
}(_textEditor2.default);

exports.default = NumericEditor;