<?php

return array (
  'type' => 'function',
  'name' => 'metaphone',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'metaphone',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'metaphone function (php.net)',
        'url' => 'https://www.php.net/manual/function.metaphone.php',
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
  'toString' => 'Function [ <internal, deprecated:standard> function metaphone ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $string ]
    Parameter #1 [ <optional> int $max_phonemes = 0 ]
  }
  - Return [ string ]
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
          'since' => '8.6',
          'message' => 'use a userland phonetic matching library instead',
        ),
      ),
    ),
  ),
);
