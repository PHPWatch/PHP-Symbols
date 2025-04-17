<?php

return array (
  'type' => 'class',
  'name' => 'DateInterval',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DateInterval',
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
        'name' => 'DateInterval class (php.net)',
        'url' => 'https://www.php.net/manual/class.dateinterval.php',
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
      'class' => 'DateInterval',
      'parameters' => 
      array (
        'interval_spec' => 
        array (
          'position' => 0,
          'name' => 'interval_spec',
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'DateInterval',
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
    '__set_state' => 
    array (
      'name' => '__set_state',
      'class' => 'DateInterval',
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
    'format' => 
    array (
      'name' => 'format',
      'class' => 'DateInterval',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
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
    'createFromDateString' => 
    array (
      'name' => 'createFromDateString',
      'class' => 'DateInterval',
      'parameters' => 
      array (
        'time' => 
        array (
          'position' => 0,
          'name' => 'time',
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
  ),
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'date',
  'toString' => 'Class [ <internal:date> class DateInterval ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:date> static public method __set_state ] {
    }

    Method [ <internal:date> static public method createFromDateString ] {

      - Parameters [1] {
        Parameter #0 [ <required> $time ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [3] {
    Method [ <internal:date, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $interval_spec ]
      }
    }

    Method [ <internal:date> public method __wakeup ] {
    }

    Method [ <internal:date> public method format ] {

      - Parameters [1] {
        Parameter #0 [ <required> $format ]
      }
    }
  }
}
',
);
