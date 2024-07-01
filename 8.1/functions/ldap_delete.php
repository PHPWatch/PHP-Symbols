<?php

return array (
  'type' => 'function',
  'name' => 'ldap_delete',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_delete',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_delete function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-delete.php',
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
  'extension' => 'ldap',
  'toString' => 'Function [ <internal:ldap> function ldap_delete ] {

  - Parameters [3] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> string $dn ]
    Parameter #2 [ <optional> ?array $controls = null ]
  }
  - Return [ bool ]
}
',
);
