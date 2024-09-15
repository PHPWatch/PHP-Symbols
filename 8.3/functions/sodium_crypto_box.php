<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_box',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_box',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_box function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-box.php',
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
  'extension' => 'sodium',
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_box ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $message ]
    Parameter #1 [ <required> string $nonce ]
    Parameter #2 [ <required> string $key_pair ]
  }
  - Return [ string ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'message' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
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
