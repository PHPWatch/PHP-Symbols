<?php

return array (
  'type' => 'class',
  'name' => 'IntlGregorianCalendar',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlGregorianCalendar',
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
        'name' => 'IntlGregorianCalendar class (php.net)',
        'url' => 'https://www.php.net/manual/class.intlgregoriancalendar.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
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
      'class' => 'IntlGregorianCalendar',
      'parameters' => 
      array (
        'timeZoneOrYear' => 
        array (
          'position' => 0,
          'name' => 'timeZoneOrYear',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'localeOrMonth' => 
        array (
          'position' => 1,
          'name' => 'localeOrMonth',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dayOfMonth' => 
        array (
          'position' => 2,
          'name' => 'dayOfMonth',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'hour' => 
        array (
          'position' => 3,
          'name' => 'hour',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'minute' => 
        array (
          'position' => 4,
          'name' => 'minute',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'second' => 
        array (
          'position' => 5,
          'name' => 'second',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setGregorianChange' => 
    array (
      'name' => 'setGregorianChange',
      'class' => 'IntlGregorianCalendar',
      'parameters' => 
      array (
        'date' => 
        array (
          'position' => 0,
          'name' => 'date',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getGregorianChange' => 
    array (
      'name' => 'getGregorianChange',
      'class' => 'IntlGregorianCalendar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isLeapYear' => 
    array (
      'name' => 'isLeapYear',
      'class' => 'IntlGregorianCalendar',
      'parameters' => 
      array (
        'year' => 
        array (
          'position' => 0,
          'name' => 'year',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createInstance' => 
    array (
      'name' => 'createInstance',
      'class' => 'IntlCalendar',
      'parameters' => 
      array (
        'timeZone' => 
        array (
          'position' => 0,
          'name' => 'timeZone',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 1,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
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
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 1,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'commonlyUsed' => 
        array (
          'position' => 2,
          'name' => 'commonlyUsed',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
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
      'has_return_type' => NULL,
      'is_static' => true,
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
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
        'date' => 
        array (
          'position' => 0,
          'name' => 'date',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'amount' => 
        array (
          'position' => 1,
          'name' => 'amount',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'timeZone' => 
        array (
          'position' => 0,
          'name' => 'timeZone',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'calendar' => 
        array (
          'position' => 0,
          'name' => 'calendar',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'calendar' => 
        array (
          'position' => 0,
          'name' => 'calendar',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'fieldOrYear' => 
        array (
          'position' => 0,
          'name' => 'fieldOrYear',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'valueOrMonth' => 
        array (
          'position' => 1,
          'name' => 'valueOrMonth',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dayOfMonth' => 
        array (
          'position' => 2,
          'name' => 'dayOfMonth',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'hour' => 
        array (
          'position' => 3,
          'name' => 'hour',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'minute' => 
        array (
          'position' => 4,
          'name' => 'minute',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'second' => 
        array (
          'position' => 5,
          'name' => 'second',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'amountOrUpOrDown' => 
        array (
          'position' => 1,
          'name' => 'amountOrUpOrDown',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'when' => 
        array (
          'position' => 0,
          'name' => 'when',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'field' => 
        array (
          'position' => 1,
          'name' => 'field',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'localeType' => 
        array (
          'position' => 0,
          'name' => 'localeType',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
        'calendar' => 
        array (
          'position' => 0,
          'name' => 'calendar',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'date' => 
        array (
          'position' => 0,
          'name' => 'date',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'isLenient' => 
        array (
          'position' => 0,
          'name' => 'isLenient',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'numberOfDays' => 
        array (
          'position' => 0,
          'name' => 'numberOfDays',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
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
        'calendar' => 
        array (
          'position' => 0,
          'name' => 'calendar',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
        'wallTimeOption' => 
        array (
          'position' => 0,
          'name' => 'wallTimeOption',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'wallTimeOption' => 
        array (
          'position' => 0,
          'name' => 'wallTimeOption',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
        'dateTime' => 
        array (
          'position' => 0,
          'name' => 'dateTime',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class IntlGregorianCalendar extends IntlCalendar ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [5] {
    Method [ <internal:intl, inherits IntlCalendar> static public method createInstance ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $timeZone ]
        Parameter #1 [ <optional> $locale ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> static public method getKeywordValuesForLocale ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $locale ]
        Parameter #2 [ <required> $commonlyUsed ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> static public method getNow ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> static public method getAvailableLocales ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> static public method fromDateTime ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dateTime ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [44] {
    Method [ <internal:intl, overwrites IntlCalendar, ctor> public method __construct ] {

      - Parameters [6] {
        Parameter #0 [ <optional> $timeZoneOrYear ]
        Parameter #1 [ <optional> $localeOrMonth ]
        Parameter #2 [ <optional> $dayOfMonth ]
        Parameter #3 [ <optional> $hour ]
        Parameter #4 [ <optional> $minute ]
        Parameter #5 [ <optional> $second ]
      }
    }

    Method [ <internal:intl> public method setGregorianChange ] {

      - Parameters [1] {
        Parameter #0 [ <required> $date ]
      }
    }

    Method [ <internal:intl> public method getGregorianChange ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method isLeapYear ] {

      - Parameters [1] {
        Parameter #0 [ <required> $year ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method get ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getTime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method setTime ] {

      - Parameters [1] {
        Parameter #0 [ <required> $date ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method add ] {

      - Parameters [2] {
        Parameter #0 [ <required> $field ]
        Parameter #1 [ <required> $amount ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method setTimeZone ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timeZone ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method after ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $calendar ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method before ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $calendar ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method set ] {

      - Parameters [6] {
        Parameter #0 [ <required> $fieldOrYear ]
        Parameter #1 [ <required> $valueOrMonth ]
        Parameter #2 [ <optional> $dayOfMonth ]
        Parameter #3 [ <optional> $hour ]
        Parameter #4 [ <optional> $minute ]
        Parameter #5 [ <optional> $second ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method roll ] {

      - Parameters [2] {
        Parameter #0 [ <required> $field ]
        Parameter #1 [ <required> $amountOrUpOrDown ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method clear ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method fieldDifference ] {

      - Parameters [2] {
        Parameter #0 [ <required> $when ]
        Parameter #1 [ <required> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getActualMaximum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getActualMinimum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getDayOfWeekType ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dayOfWeek ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getFirstDayOfWeek ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getGreatestMinimum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getLeastMaximum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getLocale ] {

      - Parameters [1] {
        Parameter #0 [ <required> $localeType ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getMaximum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getMinimalDaysInFirstWeek ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getMinimum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getTimeZone ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getWeekendTransition ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dayOfWeek ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method inDaylightTime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method isEquivalentTo ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $calendar ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method isLenient ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method isSet ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method isWeekend ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $date ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method setFirstDayOfWeek ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dayOfWeek ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method setLenient ] {

      - Parameters [1] {
        Parameter #0 [ <required> $isLenient ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method setMinimalDaysInFirstWeek ] {

      - Parameters [1] {
        Parameter #0 [ <required> $numberOfDays ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method equals ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $calendar ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getRepeatedWallTimeOption ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getSkippedWallTimeOption ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method setRepeatedWallTimeOption ] {

      - Parameters [1] {
        Parameter #0 [ <required> $wallTimeOption ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method setSkippedWallTimeOption ] {

      - Parameters [1] {
        Parameter #0 [ <required> $wallTimeOption ]
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method toDateTime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getErrorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlCalendar> public method getErrorMessage ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
