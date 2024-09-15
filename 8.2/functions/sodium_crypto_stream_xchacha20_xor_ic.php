<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_stream_xchacha20_xor_ic',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_stream_xchacha20_xor_ic',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_stream_xchacha20_xor_ic function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-stream-xchacha20-xor-ic.php',
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
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_stream_xchacha20_xor_ic ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $message ]
    Parameter #1 [ <required> string $nonce ]
    Parameter #2 [ <required> int $counter ]
    Parameter #3 [ <required> string $key ]
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
      'key' => 
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
