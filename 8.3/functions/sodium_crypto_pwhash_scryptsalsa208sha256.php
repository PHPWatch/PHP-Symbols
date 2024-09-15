<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_pwhash_scryptsalsa208sha256',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_pwhash_scryptsalsa208sha256',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_pwhash_scryptsalsa208sha256 function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-pwhash-scryptsalsa208sha256.php',
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
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_pwhash_scryptsalsa208sha256 ] {

  - Parameters [5] {
    Parameter #0 [ <required> int $length ]
    Parameter #1 [ <required> string $password ]
    Parameter #2 [ <required> string $salt ]
    Parameter #3 [ <required> int $opslimit ]
    Parameter #4 [ <required> int $memlimit ]
  }
  - Return [ string ]
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
