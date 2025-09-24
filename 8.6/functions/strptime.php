<?php

return array (
  'type' => 'function',
  'name' => 'strptime',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'strptime',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'strptime function (php.net)',
        'url' => 'https://www.php.net/manual/function.strptime.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionUnionType',
    'nullable' => false,
  ),
  'extension' => 'standard',
  'toString' => 'Function [ <internal, deprecated:standard> function strptime ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $timestamp ]
    Parameter #1 [ <required> string $format ]
  }
  - Return [ array|false ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.2',
          'message' => 'use date_parse_from_format() (for locale-independent parsing), or IntlDateFormatter::parse() (for locale-dependent parsing) instead',
        ),
      ),
    ),
  ),
);
