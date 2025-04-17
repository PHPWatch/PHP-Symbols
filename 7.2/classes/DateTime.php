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
  'interfaces' => 
  array (
    0 => 'DateTimeInterface',
  ),
  'constants' => 
  array (
    'ATOM' => 'Y-m-d\\TH:i:sP',
    'COOKIE' => 'l, d-M-Y H:i:s T',
    'ISO8601' => 'Y-m-d\\TH:i:sO',
    'RFC822' => 'D, d M y H:i:s O',
    'RFC850' => 'l, d-M-y H:i:s T',
    'RFC1036' => 'D, d M y H:i:s O',
    'RFC1123' => 'D, d M Y H:i:s O',
    'RFC7231' => 'D, d M Y H:i:s \\G\\M\\T',
    'RFC2822' => 'D, d M Y H:i:s O',
    'RFC3339' => 'Y-m-d\\TH:i:sP',
    'RFC3339_EXTENDED' => 'Y-m-d\\TH:i:s.vP',
    'RSS' => 'D, d M Y H:i:s O',
    'W3C' => 'Y-m-d\\TH:i:sP',
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
        'time' => 
        array (
          'position' => 0,
          'name' => 'time',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timezone' => 
        array (
          'position' => 1,
          'name' => 'timezone',
          'type' => NULL,
          'is_optional' => true,
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
      'class' => 'DateTime',
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
        'time' => 
        array (
          'position' => 1,
          'name' => 'time',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'object' => 
        array (
          'position' => 2,
          'name' => 'object',
          'type' => 'DateTimeZone',
          'is_optional' => true,
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
          'type' => NULL,
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
        'modify' => 
        array (
          'position' => 0,
          'name' => 'modify',
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'microseconds' => 
        array (
          'position' => 3,
          'name' => 'microseconds',
          'type' => NULL,
          'is_optional' => true,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
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
    'setTimestamp' => 
    array (
      'name' => 'setTimestamp',
      'class' => 'DateTime',
      'parameters' => 
      array (
        'unixtimestamp' => 
        array (
          'position' => 0,
          'name' => 'unixtimestamp',
          'type' => NULL,
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
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
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

  - Static methods [3] {
    Method [ <internal:date> static public method __set_state ] {
    }

    Method [ <internal:date> static public method createFromFormat ] {

      - Parameters [3] {
        Parameter #0 [ <required> $format ]
        Parameter #1 [ <required> $time ]
        Parameter #2 [ <optional> DateTimeZone or NULL $object ]
      }
    }

    Method [ <internal:date> static public method getLastErrors ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [0] {
  }

  - Methods [15] {
    Method [ <internal:date, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $time ]
        Parameter #1 [ <optional> $timezone ]
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method __wakeup ] {
    }

    Method [ <internal:date, prototype DateTimeInterface> public method format ] {

      - Parameters [1] {
        Parameter #0 [ <required> $format ]
      }
    }

    Method [ <internal:date> public method modify ] {

      - Parameters [1] {
        Parameter #0 [ <required> $modify ]
      }
    }

    Method [ <internal:date> public method add ] {

      - Parameters [1] {
        Parameter #0 [ <required> $interval ]
      }
    }

    Method [ <internal:date> public method sub ] {

      - Parameters [1] {
        Parameter #0 [ <required> $interval ]
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method getTimezone ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method setTimezone ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timezone ]
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method getOffset ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method setTime ] {

      - Parameters [4] {
        Parameter #0 [ <required> $hour ]
        Parameter #1 [ <required> $minute ]
        Parameter #2 [ <optional> $second ]
        Parameter #3 [ <optional> $microseconds ]
      }
    }

    Method [ <internal:date> public method setDate ] {

      - Parameters [3] {
        Parameter #0 [ <required> $year ]
        Parameter #1 [ <required> $month ]
        Parameter #2 [ <required> $day ]
      }
    }

    Method [ <internal:date> public method setISODate ] {

      - Parameters [3] {
        Parameter #0 [ <required> $year ]
        Parameter #1 [ <required> $week ]
        Parameter #2 [ <optional> $day ]
      }
    }

    Method [ <internal:date> public method setTimestamp ] {

      - Parameters [1] {
        Parameter #0 [ <required> $unixtimestamp ]
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method getTimestamp ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date, prototype DateTimeInterface> public method diff ] {

      - Parameters [2] {
        Parameter #0 [ <required> $object ]
        Parameter #1 [ <optional> $absolute ]
      }
    }
  }
}
',
);
