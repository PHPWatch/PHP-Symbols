<?php

return array (
  'type' => 'class',
  'name' => 'IntlCalendar',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlCalendar',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'IntlCalendar class (php.net)',
        'url' => 'https://www.php.net/manual/class.intlcalendar.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'createInstance' => 
    array (
      'name' => 'createInstance',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'timezone' => 
        array (
          'position' => 0,
          'name' => 'timezone',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 1,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'equals' => 
    array (
      'name' => 'equals',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'other' => 
        array (
          'position' => 0,
          'name' => 'other',
          'type' => 'IntlCalendar',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fieldDifference' => 
    array (
      'name' => 'fieldDifference',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'timestamp' => 
        array (
          'position' => 0,
          'name' => 'timestamp',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'field' => 
        array (
          'position' => 1,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'add' => 
    array (
      'name' => 'add',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'after' => 
    array (
      'name' => 'after',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'other' => 
        array (
          'position' => 0,
          'name' => 'other',
          'type' => 'IntlCalendar',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'before' => 
    array (
      'name' => 'before',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'other' => 
        array (
          'position' => 0,
          'name' => 'other',
          'type' => 'IntlCalendar',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromDateTime' => 
    array (
      'name' => 'fromDateTime',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'datetime' => 
        array (
          'position' => 0,
          'name' => 'datetime',
          'type' => 'DateTime|string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 1,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'get' => 
    array (
      'name' => 'get',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getActualMaximum' => 
    array (
      'name' => 'getActualMaximum',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getActualMinimum' => 
    array (
      'name' => 'getActualMinimum',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAvailableLocales' => 
    array (
      'name' => 'getAvailableLocales',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getDayOfWeekType' => 
    array (
      'name' => 'getDayOfWeekType',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'dayOfWeek' => 
        array (
          'position' => 0,
          'name' => 'dayOfWeek',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getErrorMessage' => 
    array (
      'name' => 'getErrorMessage',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFirstDayOfWeek' => 
    array (
      'name' => 'getFirstDayOfWeek',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getGreatestMinimum' => 
    array (
      'name' => 'getGreatestMinimum',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getKeywordValuesForLocale' => 
    array (
      'name' => 'getKeywordValuesForLocale',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'keyword' => 
        array (
          'position' => 0,
          'name' => 'keyword',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 1,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'onlyCommon' => 
        array (
          'position' => 2,
          'name' => 'onlyCommon',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLeastMaximum' => 
    array (
      'name' => 'getLeastMaximum',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLocale' => 
    array (
      'name' => 'getLocale',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getMaximum' => 
    array (
      'name' => 'getMaximum',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getMinimalDaysInFirstWeek' => 
    array (
      'name' => 'getMinimalDaysInFirstWeek',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setMinimalDaysInFirstWeek' => 
    array (
      'name' => 'setMinimalDaysInFirstWeek',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'days' => 
        array (
          'position' => 0,
          'name' => 'days',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getMinimum' => 
    array (
      'name' => 'getMinimum',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getNow' => 
    array (
      'name' => 'getNow',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRepeatedWallTimeOption' => 
    array (
      'name' => 'getRepeatedWallTimeOption',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getSkippedWallTimeOption' => 
    array (
      'name' => 'getSkippedWallTimeOption',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTime' => 
    array (
      'name' => 'getTime',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTimeZone' => 
    array (
      'name' => 'getTimeZone',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getWeekendTransition' => 
    array (
      'name' => 'getWeekendTransition',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'dayOfWeek' => 
        array (
          'position' => 0,
          'name' => 'dayOfWeek',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'inDaylightTime' => 
    array (
      'name' => 'inDaylightTime',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isEquivalentTo' => 
    array (
      'name' => 'isEquivalentTo',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'other' => 
        array (
          'position' => 0,
          'name' => 'other',
          'type' => 'IntlCalendar',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isLenient' => 
    array (
      'name' => 'isLenient',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isWeekend' => 
    array (
      'name' => 'isWeekend',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'timestamp' => 
        array (
          'position' => 0,
          'name' => 'timestamp',
          'type' => '?float',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'roll' => 
    array (
      'name' => 'roll',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isSet' => 
    array (
      'name' => 'isSet',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'set' => 
    array (
      'name' => 'set',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'year' => 
        array (
          'position' => 0,
          'name' => 'year',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'month' => 
        array (
          'position' => 1,
          'name' => 'month',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dayOfMonth' => 
        array (
          'position' => 2,
          'name' => 'dayOfMonth',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'hour' => 
        array (
          'position' => 3,
          'name' => 'hour',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'minute' => 
        array (
          'position' => 4,
          'name' => 'minute',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'second' => 
        array (
          'position' => 5,
          'name' => 'second',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setFirstDayOfWeek' => 
    array (
      'name' => 'setFirstDayOfWeek',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'dayOfWeek' => 
        array (
          'position' => 0,
          'name' => 'dayOfWeek',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setLenient' => 
    array (
      'name' => 'setLenient',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'lenient' => 
        array (
          'position' => 0,
          'name' => 'lenient',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setRepeatedWallTimeOption' => 
    array (
      'name' => 'setRepeatedWallTimeOption',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
          'name' => 'option',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setSkippedWallTimeOption' => 
    array (
      'name' => 'setSkippedWallTimeOption',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
          'name' => 'option',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setTime' => 
    array (
      'name' => 'setTime',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'timestamp' => 
        array (
          'position' => 0,
          'name' => 'timestamp',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setTimeZone' => 
    array (
      'name' => 'setTimeZone',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'timezone' => 
        array (
          'position' => 0,
          'name' => 'timezone',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toDateTime' => 
    array (
      'name' => 'toDateTime',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class IntlCalendar ] {

  - Constants [39] {
    Constant [ public int FIELD_ERA ] { 0 }
    Constant [ public int FIELD_YEAR ] { 1 }
    Constant [ public int FIELD_MONTH ] { 2 }
    Constant [ public int FIELD_WEEK_OF_YEAR ] { 3 }
    Constant [ public int FIELD_WEEK_OF_MONTH ] { 4 }
    Constant [ public int FIELD_DATE ] { 5 }
    Constant [ public int FIELD_DAY_OF_YEAR ] { 6 }
    Constant [ public int FIELD_DAY_OF_WEEK ] { 7 }
    Constant [ public int FIELD_DAY_OF_WEEK_IN_MONTH ] { 8 }
    Constant [ public int FIELD_AM_PM ] { 9 }
    Constant [ public int FIELD_HOUR ] { 10 }
    Constant [ public int FIELD_HOUR_OF_DAY ] { 11 }
    Constant [ public int FIELD_MINUTE ] { 12 }
    Constant [ public int FIELD_SECOND ] { 13 }
    Constant [ public int FIELD_MILLISECOND ] { 14 }
    Constant [ public int FIELD_ZONE_OFFSET ] { 15 }
    Constant [ public int FIELD_DST_OFFSET ] { 16 }
    Constant [ public int FIELD_YEAR_WOY ] { 17 }
    Constant [ public int FIELD_DOW_LOCAL ] { 18 }
    Constant [ public int FIELD_EXTENDED_YEAR ] { 19 }
    Constant [ public int FIELD_JULIAN_DAY ] { 20 }
    Constant [ public int FIELD_MILLISECONDS_IN_DAY ] { 21 }
    Constant [ public int FIELD_IS_LEAP_MONTH ] { 22 }
    Constant [ public int FIELD_FIELD_COUNT ] { 24 }
    Constant [ public int FIELD_DAY_OF_MONTH ] { 5 }
    Constant [ public int DOW_SUNDAY ] { 1 }
    Constant [ public int DOW_MONDAY ] { 2 }
    Constant [ public int DOW_TUESDAY ] { 3 }
    Constant [ public int DOW_WEDNESDAY ] { 4 }
    Constant [ public int DOW_THURSDAY ] { 5 }
    Constant [ public int DOW_FRIDAY ] { 6 }
    Constant [ public int DOW_SATURDAY ] { 7 }
    Constant [ public int DOW_TYPE_WEEKDAY ] { 0 }
    Constant [ public int DOW_TYPE_WEEKEND ] { 1 }
    Constant [ public int DOW_TYPE_WEEKEND_OFFSET ] { 2 }
    Constant [ public int DOW_TYPE_WEEKEND_CEASE ] { 3 }
    Constant [ public int WALLTIME_FIRST ] { 1 }
    Constant [ public int WALLTIME_LAST ] { 0 }
    Constant [ public int WALLTIME_NEXT_VALID ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [5] {
    Method [ <internal:intl> static public method createInstance ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $timezone = null ]
        Parameter #1 [ <optional> ?string $locale = null ]
      }
    }

    Method [ <internal:intl> static public method fromDateTime ] {

      - Parameters [2] {
        Parameter #0 [ <required> DateTime|string $datetime ]
        Parameter #1 [ <optional> ?string $locale = null ]
      }
    }

    Method [ <internal:intl> static public method getAvailableLocales ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> static public method getKeywordValuesForLocale ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $keyword ]
        Parameter #1 [ <required> string $locale ]
        Parameter #2 [ <required> bool $onlyCommon ]
      }
    }

    Method [ <internal:intl> static public method getNow ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [0] {
  }

  - Methods [41] {
    Method [ <internal:intl, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method equals ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $other ]
      }
    }

    Method [ <internal:intl> public method fieldDifference ] {

      - Parameters [2] {
        Parameter #0 [ <required> float $timestamp ]
        Parameter #1 [ <required> int $field ]
      }
    }

    Method [ <internal:intl> public method add ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $field ]
        Parameter #1 [ <required> int $value ]
      }
    }

    Method [ <internal:intl> public method after ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $other ]
      }
    }

    Method [ <internal:intl> public method before ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $other ]
      }
    }

    Method [ <internal:intl> public method clear ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $field = null ]
      }
    }

    Method [ <internal:intl> public method get ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $field ]
      }
    }

    Method [ <internal:intl> public method getActualMaximum ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $field ]
      }
    }

    Method [ <internal:intl> public method getActualMinimum ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $field ]
      }
    }

    Method [ <internal:intl> public method getDayOfWeekType ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $dayOfWeek ]
      }
    }

    Method [ <internal:intl> public method getErrorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getErrorMessage ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getFirstDayOfWeek ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getGreatestMinimum ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $field ]
      }
    }

    Method [ <internal:intl> public method getLeastMaximum ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $field ]
      }
    }

    Method [ <internal:intl> public method getLocale ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $type ]
      }
    }

    Method [ <internal:intl> public method getMaximum ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $field ]
      }
    }

    Method [ <internal:intl> public method getMinimalDaysInFirstWeek ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method setMinimalDaysInFirstWeek ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $days ]
      }
    }

    Method [ <internal:intl> public method getMinimum ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $field ]
      }
    }

    Method [ <internal:intl> public method getRepeatedWallTimeOption ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getSkippedWallTimeOption ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getTime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getTimeZone ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getWeekendTransition ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $dayOfWeek ]
      }
    }

    Method [ <internal:intl> public method inDaylightTime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method isEquivalentTo ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $other ]
      }
    }

    Method [ <internal:intl> public method isLenient ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method isWeekend ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?float $timestamp = null ]
      }
    }

    Method [ <internal:intl> public method roll ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $field ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:intl> public method isSet ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $field ]
      }
    }

    Method [ <internal:intl> public method set ] {

      - Parameters [6] {
        Parameter #0 [ <required> int $year ]
        Parameter #1 [ <required> int $month ]
        Parameter #2 [ <optional> int $dayOfMonth = <default> ]
        Parameter #3 [ <optional> int $hour = <default> ]
        Parameter #4 [ <optional> int $minute = <default> ]
        Parameter #5 [ <optional> int $second = <default> ]
      }
    }

    Method [ <internal:intl> public method setFirstDayOfWeek ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $dayOfWeek ]
      }
    }

    Method [ <internal:intl> public method setLenient ] {

      - Parameters [1] {
        Parameter #0 [ <required> bool $lenient ]
      }
    }

    Method [ <internal:intl> public method setRepeatedWallTimeOption ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $option ]
      }
    }

    Method [ <internal:intl> public method setSkippedWallTimeOption ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $option ]
      }
    }

    Method [ <internal:intl> public method setTime ] {

      - Parameters [1] {
        Parameter #0 [ <required> float $timestamp ]
      }
    }

    Method [ <internal:intl> public method setTimeZone ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timezone ]
      }
    }

    Method [ <internal:intl> public method toDateTime ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
