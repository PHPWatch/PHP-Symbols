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
  'constants' => 
  array (
    'FIELD_ERA' => 
    array (
      'value' => 0,
    ),
    'FIELD_YEAR' => 
    array (
      'value' => 1,
    ),
    'FIELD_MONTH' => 
    array (
      'value' => 2,
    ),
    'FIELD_WEEK_OF_YEAR' => 
    array (
      'value' => 3,
    ),
    'FIELD_WEEK_OF_MONTH' => 
    array (
      'value' => 4,
    ),
    'FIELD_DATE' => 
    array (
      'value' => 5,
    ),
    'FIELD_DAY_OF_YEAR' => 
    array (
      'value' => 6,
    ),
    'FIELD_DAY_OF_WEEK' => 
    array (
      'value' => 7,
    ),
    'FIELD_DAY_OF_WEEK_IN_MONTH' => 
    array (
      'value' => 8,
    ),
    'FIELD_AM_PM' => 
    array (
      'value' => 9,
    ),
    'FIELD_HOUR' => 
    array (
      'value' => 10,
    ),
    'FIELD_HOUR_OF_DAY' => 
    array (
      'value' => 11,
    ),
    'FIELD_MINUTE' => 
    array (
      'value' => 12,
    ),
    'FIELD_SECOND' => 
    array (
      'value' => 13,
    ),
    'FIELD_MILLISECOND' => 
    array (
      'value' => 14,
    ),
    'FIELD_ZONE_OFFSET' => 
    array (
      'value' => 15,
    ),
    'FIELD_DST_OFFSET' => 
    array (
      'value' => 16,
    ),
    'FIELD_YEAR_WOY' => 
    array (
      'value' => 17,
    ),
    'FIELD_DOW_LOCAL' => 
    array (
      'value' => 18,
    ),
    'FIELD_EXTENDED_YEAR' => 
    array (
      'value' => 19,
    ),
    'FIELD_JULIAN_DAY' => 
    array (
      'value' => 20,
    ),
    'FIELD_MILLISECONDS_IN_DAY' => 
    array (
      'value' => 21,
    ),
    'FIELD_IS_LEAP_MONTH' => 
    array (
      'value' => 22,
    ),
    'FIELD_FIELD_COUNT' => 
    array (
      'value' => 24,
    ),
    'FIELD_DAY_OF_MONTH' => 
    array (
      'value' => 5,
    ),
    'DOW_SUNDAY' => 
    array (
      'value' => 1,
    ),
    'DOW_MONDAY' => 
    array (
      'value' => 2,
    ),
    'DOW_TUESDAY' => 
    array (
      'value' => 3,
    ),
    'DOW_WEDNESDAY' => 
    array (
      'value' => 4,
    ),
    'DOW_THURSDAY' => 
    array (
      'value' => 5,
    ),
    'DOW_FRIDAY' => 
    array (
      'value' => 6,
    ),
    'DOW_SATURDAY' => 
    array (
      'value' => 7,
    ),
    'DOW_TYPE_WEEKDAY' => 
    array (
      'value' => 0,
    ),
    'DOW_TYPE_WEEKEND' => 
    array (
      'value' => 1,
    ),
    'DOW_TYPE_WEEKEND_OFFSET' => 
    array (
      'value' => 2,
    ),
    'DOW_TYPE_WEEKEND_CEASE' => 
    array (
      'value' => 3,
    ),
    'WALLTIME_FIRST' => 
    array (
      'value' => 1,
    ),
    'WALLTIME_LAST' => 
    array (
      'value' => 0,
    ),
    'WALLTIME_NEXT_VALID' => 
    array (
      'value' => 2,
    ),
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
      'has_return_type' => NULL,
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
        'timeZone' => 
        array (
          'position' => 0,
          'name' => 'timeZone',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
  'toString' => 'Class [ <internal:intl> class IntlCalendar ] {

  - Constants [39] {
    Constant [ integer FIELD_ERA ] { 0 }
    Constant [ integer FIELD_YEAR ] { 1 }
    Constant [ integer FIELD_MONTH ] { 2 }
    Constant [ integer FIELD_WEEK_OF_YEAR ] { 3 }
    Constant [ integer FIELD_WEEK_OF_MONTH ] { 4 }
    Constant [ integer FIELD_DATE ] { 5 }
    Constant [ integer FIELD_DAY_OF_YEAR ] { 6 }
    Constant [ integer FIELD_DAY_OF_WEEK ] { 7 }
    Constant [ integer FIELD_DAY_OF_WEEK_IN_MONTH ] { 8 }
    Constant [ integer FIELD_AM_PM ] { 9 }
    Constant [ integer FIELD_HOUR ] { 10 }
    Constant [ integer FIELD_HOUR_OF_DAY ] { 11 }
    Constant [ integer FIELD_MINUTE ] { 12 }
    Constant [ integer FIELD_SECOND ] { 13 }
    Constant [ integer FIELD_MILLISECOND ] { 14 }
    Constant [ integer FIELD_ZONE_OFFSET ] { 15 }
    Constant [ integer FIELD_DST_OFFSET ] { 16 }
    Constant [ integer FIELD_YEAR_WOY ] { 17 }
    Constant [ integer FIELD_DOW_LOCAL ] { 18 }
    Constant [ integer FIELD_EXTENDED_YEAR ] { 19 }
    Constant [ integer FIELD_JULIAN_DAY ] { 20 }
    Constant [ integer FIELD_MILLISECONDS_IN_DAY ] { 21 }
    Constant [ integer FIELD_IS_LEAP_MONTH ] { 22 }
    Constant [ integer FIELD_FIELD_COUNT ] { 24 }
    Constant [ integer FIELD_DAY_OF_MONTH ] { 5 }
    Constant [ integer DOW_SUNDAY ] { 1 }
    Constant [ integer DOW_MONDAY ] { 2 }
    Constant [ integer DOW_TUESDAY ] { 3 }
    Constant [ integer DOW_WEDNESDAY ] { 4 }
    Constant [ integer DOW_THURSDAY ] { 5 }
    Constant [ integer DOW_FRIDAY ] { 6 }
    Constant [ integer DOW_SATURDAY ] { 7 }
    Constant [ integer DOW_TYPE_WEEKDAY ] { 0 }
    Constant [ integer DOW_TYPE_WEEKEND ] { 1 }
    Constant [ integer DOW_TYPE_WEEKEND_OFFSET ] { 2 }
    Constant [ integer DOW_TYPE_WEEKEND_CEASE ] { 3 }
    Constant [ integer WALLTIME_FIRST ] { 1 }
    Constant [ integer WALLTIME_LAST ] { 0 }
    Constant [ integer WALLTIME_NEXT_VALID ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [5] {
    Method [ <internal:intl> static public method createInstance ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $timeZone ]
        Parameter #1 [ <optional> $locale ]
      }
    }

    Method [ <internal:intl> static public method getKeywordValuesForLocale ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $locale ]
        Parameter #2 [ <required> $commonlyUsed ]
      }
    }

    Method [ <internal:intl> static public method getNow ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> static public method getAvailableLocales ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> static public method fromDateTime ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dateTime ]
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

    Method [ <internal:intl> public method get ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl> public method getTime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method setTime ] {

      - Parameters [1] {
        Parameter #0 [ <required> $date ]
      }
    }

    Method [ <internal:intl> public method add ] {

      - Parameters [2] {
        Parameter #0 [ <required> $field ]
        Parameter #1 [ <required> $amount ]
      }
    }

    Method [ <internal:intl> public method setTimeZone ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timeZone ]
      }
    }

    Method [ <internal:intl> public method after ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $calendar ]
      }
    }

    Method [ <internal:intl> public method before ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $calendar ]
      }
    }

    Method [ <internal:intl> public method set ] {

      - Parameters [6] {
        Parameter #0 [ <required> $fieldOrYear ]
        Parameter #1 [ <required> $valueOrMonth ]
        Parameter #2 [ <optional> $dayOfMonth ]
        Parameter #3 [ <optional> $hour ]
        Parameter #4 [ <optional> $minute ]
        Parameter #5 [ <optional> $second ]
      }
    }

    Method [ <internal:intl> public method roll ] {

      - Parameters [2] {
        Parameter #0 [ <required> $field ]
        Parameter #1 [ <required> $amountOrUpOrDown ]
      }
    }

    Method [ <internal:intl> public method clear ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $field ]
      }
    }

    Method [ <internal:intl> public method fieldDifference ] {

      - Parameters [2] {
        Parameter #0 [ <required> $when ]
        Parameter #1 [ <required> $field ]
      }
    }

    Method [ <internal:intl> public method getActualMaximum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl> public method getActualMinimum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl> public method getDayOfWeekType ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dayOfWeek ]
      }
    }

    Method [ <internal:intl> public method getFirstDayOfWeek ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getGreatestMinimum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl> public method getLeastMaximum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl> public method getLocale ] {

      - Parameters [1] {
        Parameter #0 [ <required> $localeType ]
      }
    }

    Method [ <internal:intl> public method getMaximum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl> public method getMinimalDaysInFirstWeek ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getMinimum ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
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
        Parameter #0 [ <required> $dayOfWeek ]
      }
    }

    Method [ <internal:intl> public method inDaylightTime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method isEquivalentTo ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $calendar ]
      }
    }

    Method [ <internal:intl> public method isLenient ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method isSet ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field ]
      }
    }

    Method [ <internal:intl> public method isWeekend ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $date ]
      }
    }

    Method [ <internal:intl> public method setFirstDayOfWeek ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dayOfWeek ]
      }
    }

    Method [ <internal:intl> public method setLenient ] {

      - Parameters [1] {
        Parameter #0 [ <required> $isLenient ]
      }
    }

    Method [ <internal:intl> public method setMinimalDaysInFirstWeek ] {

      - Parameters [1] {
        Parameter #0 [ <required> $numberOfDays ]
      }
    }

    Method [ <internal:intl> public method equals ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar $calendar ]
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

    Method [ <internal:intl> public method setRepeatedWallTimeOption ] {

      - Parameters [1] {
        Parameter #0 [ <required> $wallTimeOption ]
      }
    }

    Method [ <internal:intl> public method setSkippedWallTimeOption ] {

      - Parameters [1] {
        Parameter #0 [ <required> $wallTimeOption ]
      }
    }

    Method [ <internal:intl> public method toDateTime ] {

      - Parameters [0] {
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
  }
}
',
);
