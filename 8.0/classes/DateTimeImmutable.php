<?php

return array (
  'type' => 'class',
  'name' => 'DateTimeImmutable',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DateTimeImmutable',
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
        'name' => 'DateTimeImmutable interface (php.net)',
        'url' => 'https://www.php.net/manual/class.datetimeimmutable.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'ATOM' => 
    array (
      'value' => 'Y-m-d\\TH:i:sP',
      'toString' => 'Constant [ public string ATOM ] { Y-m-d\\TH:i:sP }
',
      'visibility' => 1,
    ),
    'COOKIE' => 
    array (
      'value' => 'l, d-M-Y H:i:s T',
      'toString' => 'Constant [ public string COOKIE ] { l, d-M-Y H:i:s T }
',
      'visibility' => 1,
    ),
    'ISO8601' => 
    array (
      'value' => 'Y-m-d\\TH:i:sO',
      'toString' => 'Constant [ public string ISO8601 ] { Y-m-d\\TH:i:sO }
',
      'visibility' => 1,
    ),
    'RFC822' => 
    array (
      'value' => 'D, d M y H:i:s O',
      'toString' => 'Constant [ public string RFC822 ] { D, d M y H:i:s O }
',
      'visibility' => 1,
    ),
    'RFC850' => 
    array (
      'value' => 'l, d-M-y H:i:s T',
      'toString' => 'Constant [ public string RFC850 ] { l, d-M-y H:i:s T }
',
      'visibility' => 1,
    ),
    'RFC1036' => 
    array (
      'value' => 'D, d M y H:i:s O',
      'toString' => 'Constant [ public string RFC1036 ] { D, d M y H:i:s O }
',
      'visibility' => 1,
    ),
    'RFC1123' => 
    array (
      'value' => 'D, d M Y H:i:s O',
      'toString' => 'Constant [ public string RFC1123 ] { D, d M Y H:i:s O }
',
      'visibility' => 1,
    ),
    'RFC7231' => 
    array (
      'value' => 'D, d M Y H:i:s \\G\\M\\T',
      'toString' => 'Constant [ public string RFC7231 ] { D, d M Y H:i:s \\G\\M\\T }
',
      'visibility' => 1,
    ),
    'RFC2822' => 
    array (
      'value' => 'D, d M Y H:i:s O',
      'toString' => 'Constant [ public string RFC2822 ] { D, d M Y H:i:s O }
',
      'visibility' => 1,
    ),
    'RFC3339' => 
    array (
      'value' => 'Y-m-d\\TH:i:sP',
      'toString' => 'Constant [ public string RFC3339 ] { Y-m-d\\TH:i:sP }
',
      'visibility' => 1,
    ),
    'RFC3339_EXTENDED' => 
    array (
      'value' => 'Y-m-d\\TH:i:s.vP',
      'toString' => 'Constant [ public string RFC3339_EXTENDED ] { Y-m-d\\TH:i:s.vP }
',
      'visibility' => 1,
    ),
    'RSS' => 
    array (
      'value' => 'D, d M Y H:i:s O',
      'toString' => 'Constant [ public string RSS ] { D, d M Y H:i:s O }
',
      'visibility' => 1,
    ),
    'W3C' => 
    array (
      'value' => 'Y-m-d\\TH:i:sP',
      'toString' => 'Constant [ public string W3C ] { Y-m-d\\TH:i:sP }
',
      'visibility' => 1,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'datetime' => 
        array (
          'position' => 0,
          'name' => 'datetime',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'DateTimeImmutable',
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
      'class' => 'DateTimeImmutable',
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
    'createFromFormat' => 
    array (
      'name' => 'createFromFormat',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'DateTimeImmutable',
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
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
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
    'getTimezone' => 
    array (
      'name' => 'getTimezone',
      'class' => 'DateTimeImmutable',
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
      'class' => 'DateTimeImmutable',
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
    'getTimestamp' => 
    array (
      'name' => 'getTimestamp',
      'class' => 'DateTimeImmutable',
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
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'targetObject' => 
        array (
          'position' => 0,
          'name' => 'targetObject',
          'type' => 'DateTimeInterface',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'modifier' => 
        array (
          'position' => 0,
          'name' => 'modifier',
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
    'add' => 
    array (
      'name' => 'add',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'interval' => 
        array (
          'position' => 0,
          'name' => 'interval',
          'type' => 'DateInterval',
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
    'sub' => 
    array (
      'name' => 'sub',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'interval' => 
        array (
          'position' => 0,
          'name' => 'interval',
          'type' => 'DateInterval',
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
    'setTimezone' => 
    array (
      'name' => 'setTimezone',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'timezone' => 
        array (
          'position' => 0,
          'name' => 'timezone',
          'type' => 'DateTimeZone',
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
    'setTime' => 
    array (
      'name' => 'setTime',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'hour' => 
        array (
          'position' => 0,
          'name' => 'hour',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'year' => 
        array (
          'position' => 0,
          'name' => 'year',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'year' => 
        array (
          'position' => 0,
          'name' => 'year',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'timestamp' => 
        array (
          'position' => 0,
          'name' => 'timestamp',
          'type' => 'int',
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
    'createFromMutable' => 
    array (
      'name' => 'createFromMutable',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => 'DateTime',
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
    'createFromInterface' => 
    array (
      'name' => 'createFromInterface',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => 'DateTimeInterface',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'DateTimeImmutable',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'DateTimeInterface',
  ),
  'properties' => 
  array (
  ),
  'extension' => 'date',
  'toString' => 'Class [ <internal:date> class DateTimeImmutable implements DateTimeInterface ] {

  - Constants [13] {
    Constant [ public string ATOM ] { Y-m-d\\TH:i:sP }
    Constant [ public string COOKIE ] { l, d-M-Y H:i:s T }
    Constant [ public string ISO8601 ] { Y-m-d\\TH:i:sO }
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
    }

    Method [ <internal:date> static public method createFromFormat ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $format ]
        Parameter #1 [ <required> string $datetime ]
        Parameter #2 [ <optional> ?DateTimeZone $timezone = null ]
      }
    }

    Method [ <internal:date> static public method getLastErrors ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> static public method createFromMutable ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateTime $object ]
      }
    }

    Method [ <internal:date> static public method createFromInterface ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateTimeInterface $object ]
      }
      - Return [ DateTimeImmutable ]
    }
  }

  - Properties [0] {
  }

  - Methods [15] {
    Method [ <internal:date, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> string $datetime = "now" ]
        Parameter #1 [ <optional> ?DateTimeZone $timezone = null ]
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method __wakeup ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method format ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $format ]
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method getTimezone ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method getOffset ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method getTimestamp ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method diff ] {

      - Parameters [2] {
        Parameter #0 [ <required> DateTimeInterface $targetObject ]
        Parameter #1 [ <optional> bool $absolute = false ]
      }
    }

    Method [ <internal:date> public method modify ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $modifier ]
      }
    }

    Method [ <internal:date> public method add ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateInterval $interval ]
      }
    }

    Method [ <internal:date> public method sub ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateInterval $interval ]
      }
    }

    Method [ <internal:date> public method setTimezone ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateTimeZone $timezone ]
      }
    }

    Method [ <internal:date> public method setTime ] {

      - Parameters [4] {
        Parameter #0 [ <required> int $hour ]
        Parameter #1 [ <required> int $minute ]
        Parameter #2 [ <optional> int $second = 0 ]
        Parameter #3 [ <optional> int $microsecond = 0 ]
      }
    }

    Method [ <internal:date> public method setDate ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $year ]
        Parameter #1 [ <required> int $month ]
        Parameter #2 [ <required> int $day ]
      }
    }

    Method [ <internal:date> public method setISODate ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $year ]
        Parameter #1 [ <required> int $week ]
        Parameter #2 [ <optional> int $dayOfWeek = 1 ]
      }
    }

    Method [ <internal:date> public method setTimestamp ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $timestamp ]
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
