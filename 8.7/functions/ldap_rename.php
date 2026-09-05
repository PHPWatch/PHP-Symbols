<?php

return array (
  'type' => 'function',
  'name' => 'ldap_rename',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_rename',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_rename function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-rename.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_rename ] {

  - Parameters [6] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> string $dn ]
    Parameter #2 [ <required> string $new_rdn ]
    Parameter #3 [ <required> string $new_parent ]
    Parameter #4 [ <required> bool $delete_old_rdn ]
    Parameter #5 [ <optional> ?array $controls = null ]
  }
  - Return [ bool ]
}
',
);
