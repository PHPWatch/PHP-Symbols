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
        'name' => 'DateTimeImmutable class (php.net)',
        'url' => 'https://www.php.net/manual/class.datetimeimmutable.php',
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
    'ISO8601_EXPANDED' => 'X-m-d\\TH:i:sP',
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
      'class' => 'DateTimeImmutable',
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
      'class' => 'DateTimeImmutable',
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
    'createFromTimestamp' => 
    array (
      'name' => 'createFromTimestamp',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'timestamp' => 
        array (
          'position' => 0,
          'name' => 'timestamp',
          'type' => 'int|float',
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
    'getMicroseconds' => 
    array (
      'name' => 'getMicroseconds',
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
    'setMicroseconds' => 
    array (
      'name' => 'setMicroseconds',
      'class' => 'DateTimeImmutable',
      'parameters' => 
      array (
        'microseconds' => 
        array (
          'position' => 0,
          'name' => 'microseconds',
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
          'default_value' => NULL,
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
