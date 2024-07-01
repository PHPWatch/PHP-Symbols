<?php

return array (
  'type' => 'function',
  'name' => 'openssl_digest',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_digest',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_digest function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-digest.php',
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
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_digest ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <required> string $digest_algo ]
    Parameter #2 [ <optional> bool $binary = false ]
  }
  - Return [ string|false ]
}
',
);
