<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_pwhash_str_verify',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_pwhash_str_verify',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_pwhash_str_verify function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-pwhash-str-verify.php',
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
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_pwhash_str_verify ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $hash ]
    Parameter #1 [ <required> string $password ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'password' => 
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
