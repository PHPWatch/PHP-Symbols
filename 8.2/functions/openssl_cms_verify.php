<?php

return array (
  'type' => 'function',
  'name' => 'openssl_cms_verify',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_cms_verify',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_cms_verify function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-cms-verify.php',
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
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_cms_verify ] {

  - Parameters [9] {
    Parameter #0 [ <required> string $input_filename ]
    Parameter #1 [ <optional> int $flags = 0 ]
    Parameter #2 [ <optional> ?string $certificates = null ]
    Parameter #3 [ <optional> array $ca_info = [] ]
    Parameter #4 [ <optional> ?string $untrusted_certificates_filename = null ]
    Parameter #5 [ <optional> ?string $content = null ]
    Parameter #6 [ <optional> ?string $pk7 = null ]
    Parameter #7 [ <optional> ?string $sigfile = null ]
    Parameter #8 [ <optional> int $encoding = OPENSSL_ENCODING_SMIME ]
  }
  - Return [ bool ]
}
',
);
