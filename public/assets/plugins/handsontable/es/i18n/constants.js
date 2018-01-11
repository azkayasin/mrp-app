/**
 * Constants for parts of translation.
 */

export var CONTEXT_MENU_ITEMS_NAMESPACE = 'ContextMenu:items';
export var CONTEXTMENU_ITEMS_ROW_ABOVE = CONTEXT_MENU_ITEMS_NAMESPACE + '.insertRowAbove';
export var CONTEXTMENU_ITEMS_ROW_BELOW = CONTEXT_MENU_ITEMS_NAMESPACE + '.insertRowBelow';
export var CONTEXTMENU_ITEMS_INSERT_LEFT = CONTEXT_MENU_ITEMS_NAMESPACE + '.insertColumnOnTheLeft';
export var CONTEXTMENU_ITEMS_INSERT_RIGHT = CONTEXT_MENU_ITEMS_NAMESPACE + '.insertColumnOnTheRight';
export var CONTEXTMENU_ITEMS_REMOVE_ROW = CONTEXT_MENU_ITEMS_NAMESPACE + '.removeRow';
export var CONTEXTMENU_ITEMS_REMOVE_COLUMN = CONTEXT_MENU_ITEMS_NAMESPACE + '.removeColumn';
export var CONTEXTMENU_ITEMS_UNDO = CONTEXT_MENU_ITEMS_NAMESPACE + '.undo';
export var CONTEXTMENU_ITEMS_REDO = CONTEXT_MENU_ITEMS_NAMESPACE + '.redo';
export var CONTEXTMENU_ITEMS_READ_ONLY = CONTEXT_MENU_ITEMS_NAMESPACE + '.readOnly';
export var CONTEXTMENU_ITEMS_CLEAR_COLUMN = CONTEXT_MENU_ITEMS_NAMESPACE + '.clearColumn';

export var CONTEXTMENU_ITEMS_COPY = CONTEXT_MENU_ITEMS_NAMESPACE + '.copy';
export var CONTEXTMENU_ITEMS_CUT = CONTEXT_MENU_ITEMS_NAMESPACE + '.cut';

export var CONTEXTMENU_ITEMS_FREEZE_COLUMN = CONTEXT_MENU_ITEMS_NAMESPACE + '.freezeColumn';
export var CONTEXTMENU_ITEMS_UNFREEZE_COLUMN = CONTEXT_MENU_ITEMS_NAMESPACE + '.unfreezeColumn';

export var CONTEXTMENU_ITEMS_MERGE_CELLS = CONTEXT_MENU_ITEMS_NAMESPACE + '.mergeCells';
export var CONTEXTMENU_ITEMS_UNMERGE_CELLS = CONTEXT_MENU_ITEMS_NAMESPACE + '.unmergeCells';

export var CONTEXTMENU_ITEMS_ADD_COMMENT = CONTEXT_MENU_ITEMS_NAMESPACE + '.addComment';
export var CONTEXTMENU_ITEMS_EDIT_COMMENT = CONTEXT_MENU_ITEMS_NAMESPACE + '.editComment';
export var CONTEXTMENU_ITEMS_REMOVE_COMMENT = CONTEXT_MENU_ITEMS_NAMESPACE + '.removeComment';
export var CONTEXTMENU_ITEMS_READ_ONLY_COMMENT = CONTEXT_MENU_ITEMS_NAMESPACE + '.readOnlyComment';

export var CONTEXTMENU_ITEMS_ALIGNMENT = CONTEXT_MENU_ITEMS_NAMESPACE + '.align';
export var CONTEXTMENU_ITEMS_ALIGNMENT_LEFT = CONTEXT_MENU_ITEMS_NAMESPACE + '.align.left';
export var CONTEXTMENU_ITEMS_ALIGNMENT_CENTER = CONTEXT_MENU_ITEMS_NAMESPACE + '.align.center';
export var CONTEXTMENU_ITEMS_ALIGNMENT_RIGHT = CONTEXT_MENU_ITEMS_NAMESPACE + '.align.right';
export var CONTEXTMENU_ITEMS_ALIGNMENT_JUSTIFY = CONTEXT_MENU_ITEMS_NAMESPACE + '.align.justify';
export var CONTEXTMENU_ITEMS_ALIGNMENT_TOP = CONTEXT_MENU_ITEMS_NAMESPACE + '.align.top';
export var CONTEXTMENU_ITEMS_ALIGNMENT_MIDDLE = CONTEXT_MENU_ITEMS_NAMESPACE + '.align.middle';
export var CONTEXTMENU_ITEMS_ALIGNMENT_BOTTOM = CONTEXT_MENU_ITEMS_NAMESPACE + '.align.bottom';

export var CONTEXTMENU_ITEMS_BORDERS = CONTEXT_MENU_ITEMS_NAMESPACE + '.borders';
export var CONTEXTMENU_ITEMS_BORDERS_TOP = CONTEXT_MENU_ITEMS_NAMESPACE + '.borders.top';
export var CONTEXTMENU_ITEMS_BORDERS_RIGHT = CONTEXT_MENU_ITEMS_NAMESPACE + '.borders.right';
export var CONTEXTMENU_ITEMS_BORDERS_BOTTOM = CONTEXT_MENU_ITEMS_NAMESPACE + '.borders.bottom';
export var CONTEXTMENU_ITEMS_BORDERS_LEFT = CONTEXT_MENU_ITEMS_NAMESPACE + '.borders.left';
export var CONTEXTMENU_ITEMS_REMOVE_BORDERS = CONTEXT_MENU_ITEMS_NAMESPACE + '.borders.remove';

export var CONTEXTMENU_ITEMS_NESTED_ROWS_INSERT_CHILD = CONTEXT_MENU_ITEMS_NAMESPACE + '.nestedHeaders.insertChildRow';
export var CONTEXTMENU_ITEMS_NESTED_ROWS_DETACH_CHILD = CONTEXT_MENU_ITEMS_NAMESPACE + '.nestedHeaders.detachFromParent';

export var CONTEXTMENU_ITEMS_HIDE_COLUMN = CONTEXT_MENU_ITEMS_NAMESPACE + '.hideColumn';
export var CONTEXTMENU_ITEMS_SHOW_COLUMN = CONTEXT_MENU_ITEMS_NAMESPACE + '.showColumn';

export var CONTEXTMENU_ITEMS_HIDE_ROW = CONTEXT_MENU_ITEMS_NAMESPACE + '.hideRow';
export var CONTEXTMENU_ITEMS_SHOW_ROW = CONTEXT_MENU_ITEMS_NAMESPACE + '.showRow';

export var FILTERS_NAMESPACE = 'Filters:';
export var FILTERS_CONDITIONS_NAMESPACE = FILTERS_NAMESPACE + 'conditions';
export var FILTERS_CONDITIONS_NONE = FILTERS_CONDITIONS_NAMESPACE + '.none';
export var FILTERS_CONDITIONS_EMPTY = FILTERS_CONDITIONS_NAMESPACE + '.isEmpty';
export var FILTERS_CONDITIONS_NOT_EMPTY = FILTERS_CONDITIONS_NAMESPACE + '.isNotEmpty';
export var FILTERS_CONDITIONS_EQUAL = FILTERS_CONDITIONS_NAMESPACE + '.isEqualTo';
export var FILTERS_CONDITIONS_NOT_EQUAL = FILTERS_CONDITIONS_NAMESPACE + '.isNotEqualTo';
export var FILTERS_CONDITIONS_BEGINS_WITH = FILTERS_CONDITIONS_NAMESPACE + '.beginsWith';
export var FILTERS_CONDITIONS_ENDS_WITH = FILTERS_CONDITIONS_NAMESPACE + '.endsWith';
export var FILTERS_CONDITIONS_CONTAINS = FILTERS_CONDITIONS_NAMESPACE + '.contains';
export var FILTERS_CONDITIONS_NOT_CONTAIN = FILTERS_CONDITIONS_NAMESPACE + '.doesNotContain';
export var FILTERS_CONDITIONS_BY_VALUE = FILTERS_CONDITIONS_NAMESPACE + '.byValue';
export var FILTERS_CONDITIONS_GREATER_THAN = FILTERS_CONDITIONS_NAMESPACE + '.greaterThan';
export var FILTERS_CONDITIONS_GREATER_THAN_OR_EQUAL = FILTERS_CONDITIONS_NAMESPACE + '.greaterThanOrEqualTo';
export var FILTERS_CONDITIONS_LESS_THAN = FILTERS_CONDITIONS_NAMESPACE + '.lessThan';
export var FILTERS_CONDITIONS_LESS_THAN_OR_EQUAL = FILTERS_CONDITIONS_NAMESPACE + '.lessThanOrEqualTo';
export var FILTERS_CONDITIONS_BETWEEN = FILTERS_CONDITIONS_NAMESPACE + '.isBetween';
export var FILTERS_CONDITIONS_NOT_BETWEEN = FILTERS_CONDITIONS_NAMESPACE + '.isNotBetween';
export var FILTERS_CONDITIONS_AFTER = FILTERS_CONDITIONS_NAMESPACE + '.after';
export var FILTERS_CONDITIONS_BEFORE = FILTERS_CONDITIONS_NAMESPACE + '.before';
export var FILTERS_CONDITIONS_TODAY = FILTERS_CONDITIONS_NAMESPACE + '.today';
export var FILTERS_CONDITIONS_TOMORROW = FILTERS_CONDITIONS_NAMESPACE + '.tomorrow';
export var FILTERS_CONDITIONS_YESTERDAY = FILTERS_CONDITIONS_NAMESPACE + '.yesterday';

export var FILTERS_DIVS_FILTER_BY_CONDITION = FILTERS_NAMESPACE + 'labels.filterByCondition';
export var FILTERS_DIVS_FILTER_BY_VALUE = FILTERS_NAMESPACE + 'labels.filterByValue';

export var FILTERS_LABELS_CONJUNCTION = FILTERS_NAMESPACE + 'labels.conjunction';
export var FILTERS_LABELS_DISJUNCTION = FILTERS_NAMESPACE + 'labels.disjunction';

export var FILTERS_VALUES_BLANK_CELLS = FILTERS_NAMESPACE + 'values.blankCells';

export var FILTERS_BUTTONS_SELECT_ALL = FILTERS_NAMESPACE + 'buttons.selectAll';
export var FILTERS_BUTTONS_CLEAR = FILTERS_NAMESPACE + 'buttons.clear';
export var FILTERS_BUTTONS_OK = FILTERS_NAMESPACE + 'buttons.ok';
export var FILTERS_BUTTONS_CANCEL = FILTERS_NAMESPACE + 'buttons.cancel';

export var FILTERS_BUTTONS_PLACEHOLDER_SEARCH = FILTERS_NAMESPACE + 'buttons.placeholder.search';
export var FILTERS_BUTTONS_PLACEHOLDER_VALUE = FILTERS_NAMESPACE + 'buttons.placeholder.value';
export var FILTERS_BUTTONS_PLACEHOLDER_SECOND_VALUE = FILTERS_NAMESPACE + 'buttons.placeholder.secondValue';