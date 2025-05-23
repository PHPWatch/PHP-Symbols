<?php

return array (
  'type' => 'class',
  'name' => 'IntlDateFormatter',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlDateFormatter',
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
        'name' => 'IntlDateFormatter interface (php.net)',
        'url' => 'https://www.php.net/manual/class.intldateformatter.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'FULL' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int FULL ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'LONG' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int LONG ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'MEDIUM' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int MEDIUM ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'SHORT' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int SHORT ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'NONE' => 
    array (
      'value' => -1,
      'toString' => 'Constant [ public int NONE ] { -1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'RELATIVE_FULL' => 
    array (
      'value' => 128,
      'toString' => 'Constant [ public int RELATIVE_FULL ] { 128 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'RELATIVE_LONG' => 
    array (
      'value' => 129,
      'toString' => 'Constant [ public int RELATIVE_LONG ] { 129 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'RELATIVE_MEDIUM' => 
    array (
      'value' => 130,
      'toString' => 'Constant [ public int RELATIVE_MEDIUM ] { 130 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'RELATIVE_SHORT' => 
    array (
      'value' => 131,
      'toString' => 'Constant [ public int RELATIVE_SHORT ] { 131 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PATTERN' => 
    array (
      'value' => -2,
      'toString' => 'Constant [ public int PATTERN ] { -2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'GREGORIAN' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int GREGORIAN ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TRADITIONAL' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int TRADITIONAL ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dateType' => 
        array (
          'position' => 1,
          'name' => 'dateType',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlDateFormatter::FULL',
        ),
        'timeType' => 
        array (
          'position' => 2,
          'name' => 'timeType',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlDateFormatter::FULL',
        ),
        'timezone' => 
        array (
          'position' => 3,
          'name' => 'timezone',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'calendar' => 
        array (
          'position' => 4,
          'name' => 'calendar',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 5,
          'name' => 'pattern',
          'type' => '?string',
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
    'create' => 
    array (
      'name' => 'create',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dateType' => 
        array (
          'position' => 1,
          'name' => 'dateType',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlDateFormatter::FULL',
        ),
        'timeType' => 
        array (
          'position' => 2,
          'name' => 'timeType',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlDateFormatter::FULL',
        ),
        'timezone' => 
        array (
          'position' => 3,
          'name' => 'timezone',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'calendar' => 
        array (
          'position' => 4,
          'name' => 'calendar',
          'type' => 'IntlCalendar|int|null',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 5,
          'name' => 'pattern',
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
    'getDateType' => 
    array (
      'name' => 'getDateType',
      'class' => 'IntlDateFormatter',
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
    'getTimeType' => 
    array (
      'name' => 'getTimeType',
      'class' => 'IntlDateFormatter',
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
    'getCalendar' => 
    array (
      'name' => 'getCalendar',
      'class' => 'IntlDateFormatter',
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
    'setCalendar' => 
    array (
      'name' => 'setCalendar',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'calendar' => 
        array (
          'position' => 0,
          'name' => 'calendar',
          'type' => 'IntlCalendar|int|null',
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
    'getTimeZoneId' => 
    array (
      'name' => 'getTimeZoneId',
      'class' => 'IntlDateFormatter',
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
    'getCalendarObject' => 
    array (
      'name' => 'getCalendarObject',
      'class' => 'IntlDateFormatter',
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
      'class' => 'IntlDateFormatter',
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
    'setTimeZone' => 
    array (
      'name' => 'setTimeZone',
      'class' => 'IntlDateFormatter',
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
    'setPattern' => 
    array (
      'name' => 'setPattern',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => 'string',
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
    'getPattern' => 
    array (
      'name' => 'getPattern',
      'class' => 'IntlDateFormatter',
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
    'getLocale' => 
    array (
      'name' => 'getLocale',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'ULOC_ACTUAL_LOCALE',
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
      'class' => 'IntlDateFormatter',
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
    'isLenient' => 
    array (
      'name' => 'isLenient',
      'class' => 'IntlDateFormatter',
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
    'format' => 
    array (
      'name' => 'format',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'datetime' => 
        array (
          'position' => 0,
          'name' => 'datetime',
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
    'formatObject' => 
    array (
      'name' => 'formatObject',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'datetime' => 
        array (
          'position' => 0,
          'name' => 'datetime',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'format' => 
        array (
          'position' => 1,
          'name' => 'format',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 2,
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
    'parse' => 
    array (
      'name' => 'parse',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => NULL,
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
    'parseToCalendar' => 
    array (
      'name' => 'parseToCalendar',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int|float|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'localtime' => 
    array (
      'name' => 'localtime',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => NULL,
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
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'IntlDateFormatter',
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
      'class' => 'IntlDateFormatter',
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
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class IntlDateFormatter ] {

  - Constants [12] {
    Constant [ public int FULL ] { 0 }
    Constant [ public int LONG ] { 1 }
    Constant [ public int MEDIUM ] { 2 }
    Constant [ public int SHORT ] { 3 }
    Constant [ public int NONE ] { -1 }
    Constant [ public int RELATIVE_FULL ] { 128 }
    Constant [ public int RELATIVE_LONG ] { 129 }
    Constant [ public int RELATIVE_MEDIUM ] { 130 }
    Constant [ public int RELATIVE_SHORT ] { 131 }
    Constant [ public int PATTERN ] { -2 }
    Constant [ public int GREGORIAN ] { 1 }
    Constant [ public int TRADITIONAL ] { 0 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:intl> static public method create ] {

      - Parameters [6] {
        Parameter #0 [ <required> ?string $locale ]
        Parameter #1 [ <optional> int $dateType = IntlDateFormatter::FULL ]
        Parameter #2 [ <optional> int $timeType = IntlDateFormatter::FULL ]
        Parameter #3 [ <optional> $timezone = null ]
        Parameter #4 [ <optional> IntlCalendar|int|null $calendar = null ]
        Parameter #5 [ <optional> ?string $pattern = null ]
      }
      - Tentative return [ ?IntlDateFormatter ]
    }

    Method [ <internal:intl> static public method formatObject ] {

      - Parameters [3] {
        Parameter #0 [ <required> $datetime ]
        Parameter #1 [ <optional> $format = null ]
        Parameter #2 [ <optional> ?string $locale = null ]
      }
      - Tentative return [ string|false ]
    }
  }

  - Properties [0] {
  }

  - Methods [20] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [6] {
        Parameter #0 [ <required> ?string $locale ]
        Parameter #1 [ <optional> int $dateType = IntlDateFormatter::FULL ]
        Parameter #2 [ <optional> int $timeType = IntlDateFormatter::FULL ]
        Parameter #3 [ <optional> $timezone = null ]
        Parameter #4 [ <optional> $calendar = null ]
        Parameter #5 [ <optional> ?string $pattern = null ]
      }
    }

    Method [ <internal:intl> public method getDateType ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:intl> public method getTimeType ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:intl> public method getCalendar ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:intl> public method setCalendar ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlCalendar|int|null $calendar ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:intl> public method getTimeZoneId ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> public method getCalendarObject ] {

      - Parameters [0] {
      }
      - Tentative return [ IntlCalendar|false|null ]
    }

    Method [ <internal:intl> public method getTimeZone ] {

      - Parameters [0] {
      }
      - Tentative return [ IntlTimeZone|false ]
    }

    Method [ <internal:intl> public method setTimeZone ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timezone ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:intl> public method setPattern ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $pattern ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:intl> public method getPattern ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> public method getLocale ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $type = ULOC_ACTUAL_LOCALE ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> public method setLenient ] {

      - Parameters [1] {
        Parameter #0 [ <required> bool $lenient ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:intl> public method isLenient ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:intl> public method format ] {

      - Parameters [1] {
        Parameter #0 [ <required> $datetime ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> public method parse ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> &$offset = null ]
      }
      - Tentative return [ int|float|false ]
    }

    Method [ <internal:intl> public method parseToCalendar ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> &$offset = null ]
      }
      - Return [ int|float|false ]
    }

    Method [ <internal:intl> public method localtime ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> &$offset = null ]
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:intl> public method getErrorCode ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> public method getErrorMessage ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }
  }
}
',
  'modifiers' => 0,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
