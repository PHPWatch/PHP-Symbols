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
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'FIELD_ERA' => 0,
    'FIELD_YEAR' => 1,
    'FIELD_MONTH' => 2,
    'FIELD_WEEK_OF_YEAR' => 3,
    'FIELD_WEEK_OF_MONTH' => 4,
    'FIELD_DATE' => 5,
    'FIELD_DAY_OF_YEAR' => 6,
    'FIELD_DAY_OF_WEEK' => 7,
    'FIELD_DAY_OF_WEEK_IN_MONTH' => 8,
    'FIELD_AM_PM' => 9,
    'FIELD_HOUR' => 10,
    'FIELD_HOUR_OF_DAY' => 11,
    'FIELD_MINUTE' => 12,
    'FIELD_SECOND' => 13,
    'FIELD_MILLISECOND' => 14,
    'FIELD_ZONE_OFFSET' => 15,
    'FIELD_DST_OFFSET' => 16,
    'FIELD_YEAR_WOY' => 17,
    'FIELD_DOW_LOCAL' => 18,
    'FIELD_EXTENDED_YEAR' => 19,
    'FIELD_JULIAN_DAY' => 20,
    'FIELD_MILLISECONDS_IN_DAY' => 21,
    'FIELD_IS_LEAP_MONTH' => 22,
    'FIELD_FIELD_COUNT' => 23,
    'FIELD_DAY_OF_MONTH' => 5,
    'DOW_SUNDAY' => 1,
    'DOW_MONDAY' => 2,
    'DOW_TUESDAY' => 3,
    'DOW_WEDNESDAY' => 4,
    'DOW_THURSDAY' => 5,
    'DOW_FRIDAY' => 6,
    'DOW_SATURDAY' => 7,
    'DOW_TYPE_WEEKDAY' => 0,
    'DOW_TYPE_WEEKEND' => 1,
    'DOW_TYPE_WEEKEND_OFFSET' => 2,
    'DOW_TYPE_WEEKEND_CEASE' => 3,
    'WALLTIME_FIRST' => 1,
    'WALLTIME_LAST' => 0,
    'WALLTIME_NEXT_VALID' => 2,
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
);
