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
        'name' => 'DateTimeZone interface (php.net)',
        'url' => 'https://www.php.net/manual/class.datetimezone.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'AFRICA' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int AFRICA ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'AMERICA' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int AMERICA ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ANTARCTICA' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int ANTARCTICA ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ARCTIC' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int ARCTIC ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ASIA' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int ASIA ] { 16 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ATLANTIC' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public int ATLANTIC ] { 32 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'AUSTRALIA' => 
    array (
      'value' => 64,
      'toString' => 'Constant [ public int AUSTRALIA ] { 64 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'EUROPE' => 
    array (
      'value' => 128,
      'toString' => 'Constant [ public int EUROPE ] { 128 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'INDIAN' => 
    array (
      'value' => 256,
      'toString' => 'Constant [ public int INDIAN ] { 256 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'PACIFIC' => 
    array (
      'value' => 512,
      'toString' => 'Constant [ public int PACIFIC ] { 512 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'UTC' => 
    array (
      'value' => 1024,
      'toString' => 'Constant [ public int UTC ] { 1024 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ALL' => 
    array (
      'value' => 2047,
      'toString' => 'Constant [ public int ALL ] { 2047 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ALL_WITH_BC' => 
    array (
      'value' => 4095,
      'toString' => 'Constant [ public int ALL_WITH_BC ] { 4095 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'PER_COUNTRY' => 
    array (
      'value' => 4096,
      'toString' => 'Constant [ public int PER_COUNTRY ] { 4096 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
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
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'DateTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__unserialize' => 
    array (
      'name' => '__unserialize',
      'class' => 'DateTimeZone',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
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
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
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
      - Tentative return [ array ]
    }

    Method [ <internal:date> static public method listIdentifiers ] {

      - Parameters [2] {
        Parameter #0 [ <optional> int $timezoneGroup = DateTimeZone::ALL ]
        Parameter #1 [ <optional> ?string $countryCode = null ]
      }
      - Tentative return [ array ]
    }

    Method [ <internal:date> static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $array ]
      }
      - Tentative return [ DateTimeZone ]
    }
  }

  - Properties [0] {
  }

  - Methods [8] {
    Method [ <internal:date, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $timezone ]
      }
    }

    Method [ <internal:date> public method getName ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:date> public method getOffset ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateTimeInterface $datetime ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:date> public method getTransitions ] {

      - Parameters [2] {
        Parameter #0 [ <optional> int $timestampBegin = PHP_INT_MIN ]
        Parameter #1 [ <optional> int $timestampEnd = PHP_INT_MAX ]
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:date> public method getLocation ] {

      - Parameters [0] {
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:date> public method __serialize ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:date> public method __unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:date> public method __wakeup ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
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
