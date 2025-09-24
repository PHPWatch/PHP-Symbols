<?php

return array (
  'type' => 'function',
  'name' => 'strftime',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'strftime',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'strftime function (php.net)',
        'url' => 'https://www.php.net/manual/function.strftime.php',
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
  'extension' => 'date',
  'toString' => 'Function [ <internal, deprecated:date> function strftime ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $format ]
    Parameter #1 [ <optional> ?int $timestamp = null ]
  }
  - Return [ string|false ]
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
          'since' => '8.1',
          'message' => 'use IntlDateFormatter::format() instead',
        ),
      ),
    ),
  ),
);
