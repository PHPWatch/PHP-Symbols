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
    'ATOM' => 
    array (
      'value' => 'Y-m-d\\TH:i:sP',
      'toString' => 'Constant [ public string ATOM ] { Y-m-d\\TH:i:sP }
',
      'visibility' => 256,
    ),
    'COOKIE' => 
    array (
      'value' => 'l, d-M-Y H:i:s T',
      'toString' => 'Constant [ public string COOKIE ] { l, d-M-Y H:i:s T }
',
      'visibility' => 256,
    ),
    'ISO8601' => 
    array (
      'value' => 'Y-m-d\\TH:i:sO',
      'toString' => 'Constant [ public string ISO8601 ] { Y-m-d\\TH:i:sO }
',
      'visibility' => 256,
    ),
    'RFC822' => 
    array (
      'value' => 'D, d M y H:i:s O',
      'toString' => 'Constant [ public string RFC822 ] { D, d M y H:i:s O }
',
      'visibility' => 256,
    ),
    'RFC850' => 
    array (
      'value' => 'l, d-M-y H:i:s T',
      'toString' => 'Constant [ public string RFC850 ] { l, d-M-y H:i:s T }
',
      'visibility' => 256,
    ),
    'RFC1036' => 
    array (
      'value' => 'D, d M y H:i:s O',
      'toString' => 'Constant [ public string RFC1036 ] { D, d M y H:i:s O }
',
      'visibility' => 256,
    ),
    'RFC1123' => 
    array (
      'value' => 'D, d M Y H:i:s O',
      'toString' => 'Constant [ public string RFC1123 ] { D, d M Y H:i:s O }
',
      'visibility' => 256,
    ),
    'RFC7231' => 
    array (
      'value' => 'D, d M Y H:i:s \\G\\M\\T',
      'toString' => 'Constant [ public string RFC7231 ] { D, d M Y H:i:s \\G\\M\\T }
',
      'visibility' => 256,
    ),
    'RFC2822' => 
    array (
      'value' => 'D, d M Y H:i:s O',
      'toString' => 'Constant [ public string RFC2822 ] { D, d M Y H:i:s O }
',
      'visibility' => 256,
    ),
    'RFC3339' => 
    array (
      'value' => 'Y-m-d\\TH:i:sP',
      'toString' => 'Constant [ public string RFC3339 ] { Y-m-d\\TH:i:sP }
',
      'visibility' => 256,
    ),
    'RFC3339_EXTENDED' => 
    array (
      'value' => 'Y-m-d\\TH:i:s.vP',
      'toString' => 'Constant [ public string RFC3339_EXTENDED ] { Y-m-d\\TH:i:s.vP }
',
      'visibility' => 256,
    ),
    'RSS' => 
    array (
      'value' => 'D, d M Y H:i:s O',
      'toString' => 'Constant [ public string RSS ] { D, d M Y H:i:s O }
',
      'visibility' => 256,
    ),
    'W3C' => 
    array (
      'value' => 'Y-m-d\\TH:i:sP',
      'toString' => 'Constant [ public string W3C ] { Y-m-d\\TH:i:sP }
',
      'visibility' => 256,
    ),
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
        'absolute' => 
        array (
          'position' => 1,
          'name' => 'absolute',
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
  'extension' => 'date',
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
        Parameter #0 [ <required> $format ]
      }
    }

    Method [ <internal:date> abstract public method getTimezone ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> abstract public method getOffset ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> abstract public method getTimestamp ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> abstract public method diff ] {

      - Parameters [2] {
        Parameter #0 [ <required> $object ]
        Parameter #1 [ <optional> $absolute ]
      }
    }

    Method [ <internal:date> abstract public method __wakeup ] {
    }
  }
}
',
);
