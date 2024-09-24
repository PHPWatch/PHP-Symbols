<?php

return array (
  'type' => 'function',
  'name' => 'gmstrftime',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'gmstrftime',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'gmstrftime function (php.net)',
        'url' => 'https://www.php.net/manual/function.gmstrftime.php',
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
  'toString' => 'Function [ <internal, deprecated:date> function gmstrftime ] {

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
