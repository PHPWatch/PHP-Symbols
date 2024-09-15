<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_box_seal_open',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_box_seal_open',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_box_seal_open function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-box-seal-open.php',
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
  'extension' => 'sodium',
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_box_seal_open ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $ciphertext ]
    Parameter #1 [ <required> string $key_pair ]
  }
  - Return [ string|false ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'key_pair' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
    ),
  ),
);
