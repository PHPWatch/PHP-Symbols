<?php

return array (
  'type' => 'function',
  'name' => 'ldap_next_entry',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_next_entry',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_next_entry function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-next-entry.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_next_entry ] {

  - Parameters [2] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> LDAP\\ResultEntry $entry ]
  }
  - Return [ LDAP\\ResultEntry|false ]
}
',
);
