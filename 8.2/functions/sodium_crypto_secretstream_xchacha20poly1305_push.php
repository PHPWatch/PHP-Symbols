<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_secretstream_xchacha20poly1305_push',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_secretstream_xchacha20poly1305_push',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_secretstream_xchacha20poly1305_push function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-secretstream-xchacha20poly1305-push.php',
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
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_secretstream_xchacha20poly1305_push ] {

  - Parameters [4] {
    Parameter #0 [ <required> string &$state ]
    Parameter #1 [ <required> string $message ]
    Parameter #2 [ <optional> string $additional_data = "" ]
    Parameter #3 [ <optional> int $tag = SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE ]
  }
  - Return [ string ]
}
',
);
