<?php

return array (
  'type' => 'function',
  'name' => 'ldap_delete_ext',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_delete_ext',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_delete_ext function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-delete-ext.php',
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
  'extension' => 'ldap',
  'toString' => 'Function [ <internal:ldap> function ldap_delete_ext ] {

  - Parameters [3] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> string $dn ]
    Parameter #2 [ <optional> ?array $controls = null ]
  }
  - Return [ LDAP\\Result|false ]
}
',
);
