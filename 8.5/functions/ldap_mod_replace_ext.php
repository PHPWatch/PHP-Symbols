<?php

return array (
  'type' => 'function',
  'name' => 'ldap_mod_replace_ext',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_mod_replace_ext',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_mod_replace_ext function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-mod-replace-ext.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_mod_replace_ext ] {

  - Parameters [4] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> string $dn ]
    Parameter #2 [ <required> array $entry ]
    Parameter #3 [ <optional> ?array $controls = null ]
  }
  - Return [ LDAP\\Result|false ]
}
',
);
