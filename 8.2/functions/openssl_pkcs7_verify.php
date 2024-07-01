<?php

return array (
  'type' => 'function',
  'name' => 'openssl_pkcs7_verify',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_pkcs7_verify',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_pkcs7_verify function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-pkcs7-verify.php',
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
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_pkcs7_verify ] {

  - Parameters [7] {
    Parameter #0 [ <required> string $input_filename ]
    Parameter #1 [ <required> int $flags ]
    Parameter #2 [ <optional> ?string $signers_certificates_filename = null ]
    Parameter #3 [ <optional> array $ca_info = [] ]
    Parameter #4 [ <optional> ?string $untrusted_certificates_filename = null ]
    Parameter #5 [ <optional> ?string $content = null ]
    Parameter #6 [ <optional> ?string $output_filename = null ]
  }
  - Return [ int|bool ]
}
',
);
