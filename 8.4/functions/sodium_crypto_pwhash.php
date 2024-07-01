<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_pwhash',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_pwhash',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_pwhash function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-pwhash.php',
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
  'extension' => 'sodium',
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_pwhash ] {

  - Parameters [6] {
    Parameter #0 [ <required> int $length ]
    Parameter #1 [ <required> string $password ]
    Parameter #2 [ <required> string $salt ]
    Parameter #3 [ <required> int $opslimit ]
    Parameter #4 [ <required> int $memlimit ]
    Parameter #5 [ <optional> int $algo = SODIUM_CRYPTO_PWHASH_ALG_DEFAULT ]
  }
  - Return [ string ]
}
',
);
