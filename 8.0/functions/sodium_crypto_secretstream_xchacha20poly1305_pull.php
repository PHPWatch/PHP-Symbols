<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_secretstream_xchacha20poly1305_pull',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_secretstream_xchacha20poly1305_pull',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_secretstream_xchacha20poly1305_pull function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-secretstream-xchacha20poly1305-pull.php',
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
  'extension' => 'sodium',
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_secretstream_xchacha20poly1305_pull ] {

  - Parameters [3] {
    Parameter #0 [ <required> string &$state ]
    Parameter #1 [ <required> string $ciphertext ]
    Parameter #2 [ <optional> string $additional_data = "" ]
  }
  - Return [ array|false ]
}
',
);
