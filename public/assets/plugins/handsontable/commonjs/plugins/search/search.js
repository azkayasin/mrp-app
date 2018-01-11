'use strict';

exports.__esModule = true;

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var _pluginHooks = require('./../../pluginHooks');

var _pluginHooks2 = _interopRequireDefault(_pluginHooks);

var _element = require('./../../helpers/dom/element');

var _renderers = require('./../../renderers');

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * @private
 * @plugin Search
 */
function Search(instance) {
  this.query = function (queryStr, callback, queryMethod) {
    var rowCount = instance.countRows();
    var colCount = instance.countCols();
    var queryResult = [];

    if (!callback) {
      callback = Search.global.getDefaultCallback();
    }

    if (!queryMethod) {
      queryMethod = Search.global.getDefaultQueryMethod();
    }

    for (var rowIndex = 0; rowIndex < rowCount; rowIndex++) {
      for (var colIndex = 0; colIndex < colCount; colIndex++) {
        var cellData = instance.getDataAtCell(rowIndex, colIndex);
        var cellProperties = instance.getCellMeta(rowIndex, colIndex);
        var cellCallback = cellProperties.search.callback || callback;
        var cellQueryMethod = cellProperties.search.queryMethod || queryMethod;
        var testResult = cellQueryMethod(queryStr, cellData);

        if (testResult) {
          var singleResult = {
            row: rowIndex,
            col: colIndex,
            data: cellData
          };

          queryResult.push(singleResult);
        }

        if (cellCallback) {
          cellCallback(instance, rowIndex, colIndex, cellData, testResult);
        }
      }
    }

    return queryResult;
  };
};

Search.DEFAULT_CALLBACK = function (instance, row, col, data, testResult) {
  instance.getCellMeta(row, col).isSearchResult = testResult;
};

Search.DEFAULT_QUERY_METHOD = function (query, value) {
  if (typeof query == 'undefined' || query == null || !query.toLowerCase || query.length === 0) {
    return false;
  }
  if (typeof value == 'undefined' || value == null) {
    return false;
  }

  return value.toString().toLowerCase().indexOf(query.toLowerCase()) != -1;
};

Search.DEFAULT_SEARCH_RESULT_CLASS = 'htSearchResult';

Search.global = function () {

  var defaultCallback = Search.DEFAULT_CALLBACK;
  var defaultQueryMethod = Search.DEFAULT_QUERY_METHOD;
  var defaultSearchResultClass = Search.DEFAULT_SEARCH_RESULT_CLASS;

  return {
    getDefaultCallback: function getDefaultCallback() {
      return defaultCallback;
    },
    setDefaultCallback: function setDefaultCallback(newDefaultCallback) {
      defaultCallback = newDefaultCallback;
    },
    getDefaultQueryMethod: function getDefaultQueryMethod() {
      return defaultQueryMethod;
    },
    setDefaultQueryMethod: function setDefaultQueryMethod(newDefaultQueryMethod) {
      defaultQueryMethod = newDefaultQueryMethod;
    },
    getDefaultSearchResultClass: function getDefaultSearchResultClass() {
      return defaultSearchResultClass;
    },
    setDefaultSearchResultClass: function setDefaultSearchResultClass(newSearchResultClass) {
      defaultSearchResultClass = newSearchResultClass;
    }
  };
}();

function SearchCellDecorator(instance, TD, row, col, prop, value, cellProperties) {
  var searchResultClass = cellProperties.search !== null && _typeof(cellProperties.search) == 'object' && cellProperties.search.searchResultClass || Search.global.getDefaultSearchResultClass();

  if (cellProperties.isSearchResult) {
    (0, _element.addClass)(TD, searchResultClass);
  } else {
    (0, _element.removeClass)(TD, searchResultClass);
  }
};

var originalBaseRenderer = (0, _renderers.getRenderer)('base');

(0, _renderers.registerRenderer)('base', function (instance, TD, row, col, prop, value, cellProperties) {
  originalBaseRenderer.apply(this, arguments);
  SearchCellDecorator.apply(this, arguments);
});

function init() {
  var instance = this;

  var pluginEnabled = !!instance.getSettings().search;

  if (pluginEnabled) {
    instance.search = new Search(instance);
  } else {
    delete instance.search;
  }
}

_pluginHooks2.default.getSingleton().add('afterInit', init);
_pluginHooks2.default.getSingleton().add('afterUpdateSettings', init);

exports.default = Search;