<?php

return array (
  'type' => 'function',
  'name' => 'hash_pbkdf2',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'hash_pbkdf2',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'hash_pbkdf2 function (php.net)',
        'url' => 'https://www.php.net/manual/function.hash-pbkdf2.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 
    \ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'hash',
  'toString' => 'Function [ <internal:hash> function hash_pbkdf2 ] {

  - Parameters [7] {
    Parameter #0 [ <required> string $algo ]
    Parameter #1 [ <required> string $password ]
    Parameter #2 [ <required> string $salt ]
    Parameter #3 [ <required> int $iterations ]
    Parameter #4 [ <optional> int $length = 0 ]
    Parameter #5 [ <optional> bool $binary = false ]
    Parameter #6 [ <optional> array $options = [] ]
  }
  - Return [ string ]
}
',
);
