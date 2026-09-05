<?php

return array (
  'type' => 'class',
  'name' => 'Time\\Duration',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Time\\Duration',
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
        'name' => 'Time\\Duration interface (php.net)',
        'url' => 'https://www.php.net/manual/class.time-duration.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Time',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Time\\Duration',
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
    'fromSeconds' => 
    array (
      'name' => 'fromSeconds',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'seconds' => 
        array (
          'position' => 0,
          'name' => 'seconds',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nanoseconds' => 
        array (
          'position' => 1,
          'name' => 'nanoseconds',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromNanoseconds' => 
    array (
      'name' => 'fromNanoseconds',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'nanoseconds' => 
        array (
          'position' => 0,
          'name' => 'nanoseconds',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromMicroseconds' => 
    array (
      'name' => 'fromMicroseconds',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'microseconds' => 
        array (
          'position' => 0,
          'name' => 'microseconds',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromMilliseconds' => 
    array (
      'name' => 'fromMilliseconds',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'milliseconds' => 
        array (
          'position' => 0,
          'name' => 'milliseconds',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromMinutes' => 
    array (
      'name' => 'fromMinutes',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'minutes' => 
        array (
          'position' => 0,
          'name' => 'minutes',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromHours' => 
    array (
      'name' => 'fromHours',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'hours' => 
        array (
          'position' => 0,
          'name' => 'hours',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromIso8601DurationString' => 
    array (
      'name' => 'fromIso8601DurationString',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'specification' => 
        array (
          'position' => 0,
          'name' => 'specification',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'negate' => 
    array (
      'name' => 'negate',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'absolute' => 
    array (
      'name' => 'absolute',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'add' => 
    array (
      'name' => 'add',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'duration' => 
        array (
          'position' => 0,
          'name' => 'duration',
          'type' => 'Time\\Duration',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sub' => 
    array (
      'name' => 'sub',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'duration' => 
        array (
          'position' => 0,
          'name' => 'duration',
          'type' => 'Time\\Duration',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'multiplyBy' => 
    array (
      'name' => 'multiplyBy',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'factor' => 
        array (
          'position' => 0,
          'name' => 'factor',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'divideBy' => 
    array (
      'name' => 'divideBy',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'divisor' => 
        array (
          'position' => 0,
          'name' => 'divisor',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Time\\Duration',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compare' => 
    array (
      'name' => 'compare',
      'class' => 'Time\\Duration',
      'parameters' => 
      array (
        'a' => 
        array (
          'position' => 0,
          'name' => 'a',
          'type' => 'Time\\Duration',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'b' => 
        array (
          'position' => 1,
          'name' => 'b',
          'type' => 'Time\\Duration',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
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
    'seconds' => 
    array (
      'name' => 'seconds',
      'class' => 'Time\\Duration',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'nanoseconds' => 
    array (
      'name' => 'nanoseconds',
      'class' => 'Time\\Duration',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'negative' => 
    array (
      'name' => 'negative',
      'class' => 'Time\\Duration',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'date',
  'toString' => 'Class [ <internal:date> final readonly class Time\\Duration ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [8] {
    Method [ <internal:date> static public method fromSeconds ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $seconds ]
        Parameter #1 [ <optional> int $nanoseconds = 0 ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> static public method fromNanoseconds ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $nanoseconds ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> static public method fromMicroseconds ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $microseconds ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> static public method fromMilliseconds ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $milliseconds ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> static public method fromMinutes ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $minutes ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> static public method fromHours ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $hours ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> static public method fromIso8601DurationString ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $specification ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> static public method compare ] {

      - Parameters [2] {
        Parameter #0 [ <required> Time\\Duration $a ]
        Parameter #1 [ <required> Time\\Duration $b ]
      }
      - Return [ int ]
    }
  }

  - Properties [3] {
    Property [ public protected(set) readonly int $seconds ]
    Property [ public protected(set) readonly int $nanoseconds ]
    Property [ public protected(set) readonly bool $negative ]
  }

  - Methods [7] {
    Method [ <internal:date, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method negate ] {

      - Parameters [0] {
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> public method absolute ] {

      - Parameters [0] {
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> public method add ] {

      - Parameters [1] {
        Parameter #0 [ <required> Time\\Duration $duration ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> public method sub ] {

      - Parameters [1] {
        Parameter #0 [ <required> Time\\Duration $duration ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> public method multiplyBy ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $factor ]
      }
      - Return [ Time\\Duration ]
    }

    Method [ <internal:date> public method divideBy ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $divisor ]
      }
      - Return [ Time\\Duration ]
    }
  }
}
',
  'modifiers' => 65568,
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
  'is_final' => true,
  'is_instantiable' => false,
  'is_read_only' => true,
);
