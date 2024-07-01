<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_secretbox_open',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_secretbox_open',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_secretbox_open function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-secretbox-open.php',
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
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_secretbox_open ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $ciphertext ]
    Parameter #1 [ <required> string $nonce ]
    Parameter #2 [ <required> string $key ]
  }
  - Return [ string|false ]
}
',
);
