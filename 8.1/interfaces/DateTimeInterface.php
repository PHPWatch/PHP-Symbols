<?php

return array (
  'type' => 'interface',
  'name' => 'DateTimeInterface',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'DateTimeInterface',
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
        'name' => 'DateTimeInterface interface (php.net)',
        'url' => 'https://www.php.net/manual/class.datetimeinterface.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
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
    'format' => 
    array (
      'name' => 'format',
      'class' => 'DateTimeInterface',
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
      'class' => 'DateTimeInterface',
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
      'class' => 'DateTimeInterface',
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
      'class' => 'DateTimeInterface',
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
      'class' => 'DateTimeInterface',
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'DateTimeInterface',
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
  'toString' => 'Interface [ <internal:date> interface DateTimeInterface ] {

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

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [6] {
    Method [ <internal:date> abstract public method format ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $format ]
      }
      - Tentative return [ string ]
    }

    Method [ <internal:date> abstract public method getTimezone ] {

      - Parameters [0] {
      }
      - Tentative return [ DateTimeZone|false ]
    }

    Method [ <internal:date> abstract public method getOffset ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:date> abstract public method getTimestamp ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:date> abstract public method diff ] {

      - Parameters [2] {
        Parameter #0 [ <required> DateTimeInterface $targetObject ]
        Parameter #1 [ <optional> bool $absolute = false ]
      }
      - Tentative return [ DateInterval ]
    }

    Method [ <internal:date> abstract public method __wakeup ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }
  }
}
',
);
