<?php

return array (
  'type' => 'class',
  'name' => 'DateTimeZone',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DateTimeZone',
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
        'name' => 'DateTimeZone class (php.net)',
        'url' => 'https://www.php.net/manual/class.datetimezone.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'AFRICA' => 1,
    'AMERICA' => 2,
    'ANTARCTICA' => 4,
    'ARCTIC' => 8,
    'ASIA' => 16,
    'ATLANTIC' => 32,
    'AUSTRALIA' => 64,
    'EUROPE' => 128,
    'INDIAN' => 256,
    'PACIFIC' => 512,
    'UTC' => 1024,
    'ALL' => 2047,
    'ALL_WITH_BC' => 4095,
    'PER_COUNTRY' => 4096,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'DateTimeZone',
      'parameters' => 
      array (
        'timezone' => 
        array (
          'position' => 0,
          'name' => 'timezone',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'getName' => 
    array (
      'name' => 'getName',
      'class' => 'DateTimeZone',
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
    'getOffset' => 
    array (
      'name' => 'getOffset',
      'class' => 'DateTimeZone',
      'parameters' => 
      array (
        'datetime' => 
        array (
          'position' => 0,
          'name' => 'datetime',
          'type' => 'DateTimeInterface',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'getTransitions' => 
    array (
      'name' => 'getTransitions',
      'class' => 'DateTimeZone',
      'parameters' => 
      array (
        'timestampBegin' => 
        array (
          'position' => 0,
          'name' => 'timestampBegin',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -9223372036854775807-1,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PHP_INT_MIN',
        ),
        'timestampEnd' => 
        array (
          'position' => 1,
          'name' => 'timestampEnd',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 9223372036854775807,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PHP_INT_MAX',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLocation' => 
    array (
      'name' => 'getLocation',
      'class' => 'DateTimeZone',
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
    'listAbbreviations' => 
    array (
      'name' => 'listAbbreviations',
      'class' => 'DateTimeZone',
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
    'listIdentifiers' => 
    array (
      'name' => 'listIdentifiers',
      'class' => 'DateTimeZone',
      'parameters' => 
      array (
        'timezoneGroup' => 
        array (
          'position' => 0,
          'name' => 'timezoneGroup',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 2047,
          'has_default_value_constant' => true,
          'default_value_constant' => 'DateTimeZone::ALL',
        ),
        'countryCode' => 
        array (
          'position' => 1,
          'name' => 'countryCode',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'DateTimeZone',
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
    '__set_state' => 
    array (
      'name' => '__set_state',
      'class' => 'DateTimeZone',
      'parameters' => 
      array (
        'array' => 
        array (
          'position' => 0,
          'name' => 'array',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'date',
  'toString' => 'Class [ <internal:date> class DateTimeZone ] {

  - Constants [14] {
    Constant [ public int AFRICA ] { 1 }
    Constant [ public int AMERICA ] { 2 }
    Constant [ public int ANTARCTICA ] { 4 }
    Constant [ public int ARCTIC ] { 8 }
    Constant [ public int ASIA ] { 16 }
    Constant [ public int ATLANTIC ] { 32 }
    Constant [ public int AUSTRALIA ] { 64 }
    Constant [ public int EUROPE ] { 128 }
    Constant [ public int INDIAN ] { 256 }
    Constant [ public int PACIFIC ] { 512 }
    Constant [ public int UTC ] { 1024 }
    Constant [ public int ALL ] { 2047 }
    Constant [ public int ALL_WITH_BC ] { 4095 }
    Constant [ public int PER_COUNTRY ] { 4096 }
  }

  - Static properties [0] {
  }

  - Static methods [3] {
    Method [ <internal:date> static public method listAbbreviations ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> static public method listIdentifiers ] {

      - Parameters [2] {
        Parameter #0 [ <optional> int $timezoneGroup = DateTimeZone::ALL ]
        Parameter #1 [ <optional> ?string $countryCode = null ]
      }
    }

    Method [ <internal:date> static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $array ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [6] {
    Method [ <internal:date, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $timezone ]
      }
    }

    Method [ <internal:date> public method getName ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method getOffset ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateTimeInterface $datetime ]
      }
    }

    Method [ <internal:date> public method getTransitions ] {

      - Parameters [2] {
        Parameter #0 [ <optional> int $timestampBegin = PHP_INT_MIN ]
        Parameter #1 [ <optional> int $timestampEnd = PHP_INT_MAX ]
      }
    }

    Method [ <internal:date> public method getLocation ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method __wakeup ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
