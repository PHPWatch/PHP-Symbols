<?php

return array (
  'type' => 'function',
  'name' => 'strcoll',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'strcoll',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'strcoll function (php.net)',
        'url' => 'https://www.php.net/manual/function.strcoll.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'standard',
  'toString' => 'Function [ <internal, deprecated:standard> function strcoll ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $string1 ]
    Parameter #1 [ <required> string $string2 ]
  }
  - Return [ int ]
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
          'message' => 'use Collator::compare() instead',
          'since' => '8.6',
        ),
      ),
    ),
  ),
);
