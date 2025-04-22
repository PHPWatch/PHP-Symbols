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
    ),
    'AMERICA' => 
    array (
      'value' => 2,
    ),
    'ANTARCTICA' => 
    array (
      'value' => 4,
    ),
    'ARCTIC' => 
    array (
      'value' => 8,
    ),
    'ASIA' => 
    array (
      'value' => 16,
    ),
    'ATLANTIC' => 
    array (
      'value' => 32,
    ),
    'AUSTRALIA' => 
    array (
      'value' => 64,
    ),
    'EUROPE' => 
    array (
      'value' => 128,
    ),
    'INDIAN' => 
    array (
      'value' => 256,
    ),
    'PACIFIC' => 
    array (
      'value' => 512,
    ),
    'UTC' => 
    array (
      'value' => 1024,
    ),
    'ALL' => 
    array (
      'value' => 2047,
    ),
    'ALL_WITH_BC' => 
    array (
      'value' => 4095,
    ),
    'PER_COUNTRY' => 
    array (
      'value' => 4096,
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
    'getName' => 
    array (
      'name' => 'getName',
      'class' => 'DateTimeZone',
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
    'getTransitions' => 
    array (
      'name' => 'getTransitions',
      'class' => 'DateTimeZone',
      'parameters' => 
      array (
        'timestamp_begin' => 
        array (
          'position' => 0,
          'name' => 'timestamp_begin',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timestamp_end' => 
        array (
          'position' => 1,
          'name' => 'timestamp_end',
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
    'getLocation' => 
    array (
      'name' => 'getLocation',
      'class' => 'DateTimeZone',
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
    'listAbbreviations' => 
    array (
      'name' => 'listAbbreviations',
      'class' => 'DateTimeZone',
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
    'listIdentifiers' => 
    array (
      'name' => 'listIdentifiers',
      'class' => 'DateTimeZone',
      'parameters' => 
      array (
        'what' => 
        array (
          'position' => 0,
          'name' => 'what',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'country' => 
        array (
          'position' => 1,
          'name' => 'country',
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
    Constant [ integer AFRICA ] { 1 }
    Constant [ integer AMERICA ] { 2 }
    Constant [ integer ANTARCTICA ] { 4 }
    Constant [ integer ARCTIC ] { 8 }
    Constant [ integer ASIA ] { 16 }
    Constant [ integer ATLANTIC ] { 32 }
    Constant [ integer AUSTRALIA ] { 64 }
    Constant [ integer EUROPE ] { 128 }
    Constant [ integer INDIAN ] { 256 }
    Constant [ integer PACIFIC ] { 512 }
    Constant [ integer UTC ] { 1024 }
    Constant [ integer ALL ] { 2047 }
    Constant [ integer ALL_WITH_BC ] { 4095 }
    Constant [ integer PER_COUNTRY ] { 4096 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:date> static public method listAbbreviations ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> static public method listIdentifiers ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $what ]
        Parameter #1 [ <optional> $country ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [5] {
    Method [ <internal:date, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timezone ]
      }
    }

    Method [ <internal:date> public method getName ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method getOffset ] {

      - Parameters [1] {
        Parameter #0 [ <required> $datetime ]
      }
    }

    Method [ <internal:date> public method getTransitions ] {

      - Parameters [2] {
        Parameter #0 [ <required> $timestamp_begin ]
        Parameter #1 [ <required> $timestamp_end ]
      }
    }

    Method [ <internal:date> public method getLocation ] {

      - Parameters [0] {
      }
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
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
