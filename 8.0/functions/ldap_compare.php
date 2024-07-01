<?php

return array (
  'type' => 'function',
  'name' => 'ldap_compare',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_compare',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_compare function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-compare.php',
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
  'extension' => 'ldap',
  'toString' => 'Function [ <internal:ldap> function ldap_compare ] {

  - Parameters [5] {
    Parameter #0 [ <required> $ldap ]
    Parameter #1 [ <required> string $dn ]
    Parameter #2 [ <required> string $attribute ]
    Parameter #3 [ <required> string $value ]
    Parameter #4 [ <optional> ?array $controls = null ]
  }
  - Return [ int|bool ]
}
',
);
