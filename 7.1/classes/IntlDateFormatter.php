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
        'name' => 'IntlDateFormatter class (php.net)',
        'url' => 'https://www.php.net/manual/class.intldateformatter.php',
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
    'FULL' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public integer FULL ] { 0 }
',
      'visibility' => 256,
    ),
    'LONG' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public integer LONG ] { 1 }
',
      'visibility' => 256,
    ),
    'MEDIUM' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public integer MEDIUM ] { 2 }
',
      'visibility' => 256,
    ),
    'SHORT' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public integer SHORT ] { 3 }
',
      'visibility' => 256,
    ),
    'NONE' => 
    array (
      'value' => -1,
      'toString' => 'Constant [ public integer NONE ] { -1 }
',
      'visibility' => 256,
    ),
    'GREGORIAN' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public integer GREGORIAN ] { 1 }
',
      'visibility' => 256,
    ),
    'TRADITIONAL' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public integer TRADITIONAL ] { 0 }
',
      'visibility' => 256,
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
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'datetype' => 
        array (
          'position' => 1,
          'name' => 'datetype',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timetype' => 
        array (
          'position' => 2,
          'name' => 'timetype',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timezone' => 
        array (
          'position' => 3,
          'name' => 'timezone',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'calendar' => 
        array (
          'position' => 4,
          'name' => 'calendar',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 5,
          'name' => 'pattern',
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'datetype' => 
        array (
          'position' => 1,
          'name' => 'datetype',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timetype' => 
        array (
          'position' => 2,
          'name' => 'timetype',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timezone' => 
        array (
          'position' => 3,
          'name' => 'timezone',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'calendar' => 
        array (
          'position' => 4,
          'name' => 'calendar',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 5,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
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
    'setCalendar' => 
    array (
      'name' => 'setCalendar',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'which' => 
        array (
          'position' => 0,
          'name' => 'which',
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
        'zone' => 
        array (
          'position' => 0,
          'name' => 'zone',
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
        'args' => 
        array (
          'position' => 0,
          'name' => 'args',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'array' => 
        array (
          'position' => 1,
          'name' => 'array',
          'type' => NULL,
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
    'formatObject' => 
    array (
      'name' => 'formatObject',
      'class' => 'IntlDateFormatter',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
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
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 2,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => true,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'position' => 
        array (
          'position' => 1,
          'name' => 'position',
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'position' => 
        array (
          'position' => 1,
          'name' => 'position',
          'type' => NULL,
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class IntlDateFormatter ] {

  - Constants [7] {
    Constant [ public integer FULL ] { 0 }
    Constant [ public integer LONG ] { 1 }
    Constant [ public integer MEDIUM ] { 2 }
    Constant [ public integer SHORT ] { 3 }
    Constant [ public integer NONE ] { -1 }
    Constant [ public integer GREGORIAN ] { 1 }
    Constant [ public integer TRADITIONAL ] { 0 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:intl> static public method create ] {

      - Parameters [6] {
        Parameter #0 [ <required> $locale ]
        Parameter #1 [ <required> $datetype ]
        Parameter #2 [ <required> $timetype ]
        Parameter #3 [ <optional> $timezone ]
        Parameter #4 [ <optional> $calendar ]
        Parameter #5 [ <optional> $pattern ]
      }
    }

    Method [ <internal:intl> static public method formatObject ] {

      - Parameters [3] {
        Parameter #0 [ <required> $object ]
        Parameter #1 [ <optional> $format ]
        Parameter #2 [ <optional> $locale ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [19] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [6] {
        Parameter #0 [ <required> $locale ]
        Parameter #1 [ <required> $datetype ]
        Parameter #2 [ <required> $timetype ]
        Parameter #3 [ <optional> $timezone ]
        Parameter #4 [ <optional> $calendar ]
        Parameter #5 [ <optional> $pattern ]
      }
    }

    Method [ <internal:intl> public method getDateType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getTimeType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getCalendar ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getCalendarObject ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method setCalendar ] {

      - Parameters [1] {
        Parameter #0 [ <required> $which ]
      }
    }

    Method [ <internal:intl> public method getTimeZoneId ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getTimeZone ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method setTimeZone ] {

      - Parameters [1] {
        Parameter #0 [ <required> $zone ]
      }
    }

    Method [ <internal:intl> public method setPattern ] {

      - Parameters [1] {
        Parameter #0 [ <required> $pattern ]
      }
    }

    Method [ <internal:intl> public method getPattern ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getLocale ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method setLenient ] {

      - Parameters [1] {
        Parameter #0 [ <required> $lenient ]
      }
    }

    Method [ <internal:intl> public method isLenient ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method format ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $args ]
        Parameter #1 [ <optional> $array ]
      }
    }

    Method [ <internal:intl> public method parse ] {

      - Parameters [2] {
        Parameter #0 [ <required> $string ]
        Parameter #1 [ <optional> &$position ]
      }
    }

    Method [ <internal:intl> public method localtime ] {

      - Parameters [2] {
        Parameter #0 [ <required> $string ]
        Parameter #1 [ <optional> &$position ]
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
