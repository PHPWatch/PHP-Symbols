<?php

return array (
  'type' => 'class',
  'name' => 'DateTime',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DateTime',
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
        'name' => 'DateTime class (php.net)',
        'url' => 'https://www.php.net/manual/class.datetime.php',
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
    0 => 'DateTimeInterface',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'datetime' => 
        array (
          'position' => 0,
          'name' => 'datetime',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'now',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timezone' => 
        array (
          'position' => 1,
          'name' => 'timezone',
          'type' => '?DateTimeZone',
          'is_optional' => true,
          'has_default_value' => true,
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
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'DateTime',
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
      'class' => 'DateTime',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
      'class' => 'DateTime',
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
      'class' => 'DateTime',
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
    'createFromImmutable' => 
    array (
      'name' => 'createFromImmutable',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => 'DateTimeImmutable',
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
    'createFromInterface' => 
    array (
      'name' => 'createFromInterface',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => 'DateTimeInterface',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'DateTime',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createFromFormat' => 
    array (
      'name' => 'createFromFormat',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'datetime' => 
        array (
          'position' => 1,
          'name' => 'datetime',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timezone' => 
        array (
          'position' => 2,
          'name' => 'timezone',
          'type' => '?DateTimeZone',
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
    'getLastErrors' => 
    array (
      'name' => 'getLastErrors',
      'class' => 'DateTime',
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
    'format' => 
    array (
      'name' => 'format',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
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
    'modify' => 
    array (
      'name' => 'modify',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'modifier' => 
        array (
          'position' => 0,
          'name' => 'modifier',
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
    'add' => 
    array (
      'name' => 'add',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'interval' => 
        array (
          'position' => 0,
          'name' => 'interval',
          'type' => 'DateInterval',
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
    'sub' => 
    array (
      'name' => 'sub',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'interval' => 
        array (
          'position' => 0,
          'name' => 'interval',
          'type' => 'DateInterval',
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
    'getTimezone' => 
    array (
      'name' => 'getTimezone',
      'class' => 'DateTime',
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
    'setTimezone' => 
    array (
      'name' => 'setTimezone',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'timezone' => 
        array (
          'position' => 0,
          'name' => 'timezone',
          'type' => 'DateTimeZone',
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
    'getOffset' => 
    array (
      'name' => 'getOffset',
      'class' => 'DateTime',
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
    'setTime' => 
    array (
      'name' => 'setTime',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'hour' => 
        array (
          'position' => 0,
          'name' => 'hour',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'minute' => 
        array (
          'position' => 1,
          'name' => 'minute',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'second' => 
        array (
          'position' => 2,
          'name' => 'second',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'microsecond' => 
        array (
          'position' => 3,
          'name' => 'microsecond',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
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
    'setDate' => 
    array (
      'name' => 'setDate',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'year' => 
        array (
          'position' => 0,
          'name' => 'year',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'month' => 
        array (
          'position' => 1,
          'name' => 'month',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'day' => 
        array (
          'position' => 2,
          'name' => 'day',
          'type' => 'int',
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
    'setISODate' => 
    array (
      'name' => 'setISODate',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'year' => 
        array (
          'position' => 0,
          'name' => 'year',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'week' => 
        array (
          'position' => 1,
          'name' => 'week',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dayOfWeek' => 
        array (
          'position' => 2,
          'name' => 'dayOfWeek',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 1,
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
    'setTimestamp' => 
    array (
      'name' => 'setTimestamp',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'timestamp' => 
        array (
          'position' => 0,
          'name' => 'timestamp',
          'type' => 'int',
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
    'getTimestamp' => 
    array (
      'name' => 'getTimestamp',
      'class' => 'DateTime',
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
    'diff' => 
    array (
      'name' => 'diff',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'targetObject' => 
        array (
          'position' => 0,
          'name' => 'targetObject',
          'type' => 'DateTimeInterface',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'absolute' => 
        array (
          'position' => 1,
          'name' => 'absolute',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
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
  'toString' => 'Class [ <internal:date> class DateTime implements DateTimeInterface ] {

  - Constants [14] {
    Constant [ public string ATOM ] { Y-m-d\\TH:i:sP }
    Constant [ public string COOKIE ] { l, d-M-Y H:i:s T }
    Constant [ public string ISO8601 ] { Y-m-d\\TH:i:sO }
    Constant [ public string ISO8601_EXPANDED ] { X-m-d\\TH:i:sP }
    Constant [ public string RFC822 ] { D, d M y H:i:s O }
    Constant [ public string RFC850 ] { l, d-M-y H:i:s T }
    Constant [ public string RFC1036 ] { D, d M y H:i:s O }
    Constant [ public string RFC1123 ] { D, d M Y H:i:s O }
    Constant [ public string RFC7231 ] { D, d M Y H:i:s \\G\\M\\T }
    Constant [ public string RFC2822 ] { D, d M Y H:i:s O }
    Constant [ public string RFC3339 ] { Y-m-d\\TH:i:sP }
    Constant [ public string RFC3339_EXTENDED ] { Y-m-d\\TH:i:s.vP }
    Constant [ public string RSS ] { D, d M Y H:i:s O }
    Constant [ public string W3C ] { Y-m-d\\TH:i:sP }
  }

  - Static properties [0] {
  }

  - Static methods [5] {
    Method [ <internal:date> static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $array ]
      }
      - Tentative return [ DateTime ]
    }

    Method [ <internal:date> static public method createFromImmutable ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateTimeImmutable $object ]
      }
      - Tentative return [ static ]
    }

    Method [ <internal:date> static public method createFromInterface ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateTimeInterface $object ]
      }
      - Return [ DateTime ]
    }

    Method [ <internal:date> static public method createFromFormat ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $format ]
        Parameter #1 [ <required> string $datetime ]
        Parameter #2 [ <optional> ?DateTimeZone $timezone = null ]
      }
      - Tentative return [ DateTime|false ]
    }

    Method [ <internal:date> static public method getLastErrors ] {

      - Parameters [0] {
      }
      - Tentative return [ array|false ]
    }
  }

  - Properties [0] {
  }

  - Methods [17] {
    Method [ <internal:date, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> string $datetime = "now" ]
        Parameter #1 [ <optional> ?DateTimeZone $timezone = null ]
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method __serialize ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:date, prototype DateTimeInterface> public method __unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:date, prototype DateTimeInterface> public method __wakeup ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:date, prototype DateTimeInterface> public method format ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $format ]
      }
      - Tentative return [ string ]
    }

    Method [ <internal:date> public method modify ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $modifier ]
      }
      - Tentative return [ DateTime|false ]
    }

    Method [ <internal:date> public method add ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateInterval $interval ]
      }
      - Tentative return [ DateTime ]
    }

    Method [ <internal:date> public method sub ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateInterval $interval ]
      }
      - Tentative return [ DateTime ]
    }

    Method [ <internal:date, prototype DateTimeInterface> public method getTimezone ] {

      - Parameters [0] {
      }
      - Tentative return [ DateTimeZone|false ]
    }

    Method [ <internal:date> public method setTimezone ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateTimeZone $timezone ]
      }
      - Tentative return [ DateTime ]
    }

    Method [ <internal:date, prototype DateTimeInterface> public method getOffset ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:date> public method setTime ] {

      - Parameters [4] {
        Parameter #0 [ <required> int $hour ]
        Parameter #1 [ <required> int $minute ]
        Parameter #2 [ <optional> int $second = 0 ]
        Parameter #3 [ <optional> int $microsecond = 0 ]
      }
      - Tentative return [ DateTime ]
    }

    Method [ <internal:date> public method setDate ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $year ]
        Parameter #1 [ <required> int $month ]
        Parameter #2 [ <required> int $day ]
      }
      - Tentative return [ DateTime ]
    }

    Method [ <internal:date> public method setISODate ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $year ]
        Parameter #1 [ <required> int $week ]
        Parameter #2 [ <optional> int $dayOfWeek = 1 ]
      }
      - Tentative return [ DateTime ]
    }

    Method [ <internal:date> public method setTimestamp ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $timestamp ]
      }
      - Tentative return [ DateTime ]
    }

    Method [ <internal:date, prototype DateTimeInterface> public method getTimestamp ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:date, prototype DateTimeInterface> public method diff ] {

      - Parameters [2] {
        Parameter #0 [ <required> DateTimeInterface $targetObject ]
        Parameter #1 [ <optional> bool $absolute = false ]
      }
      - Tentative return [ DateInterval ]
    }
  }
}
',
);
