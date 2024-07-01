<?php

return array (
  'type' => 'function',
  'name' => 'ldap_get_dn',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_get_dn',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_get_dn function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-get-dn.php',
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
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'ldap',
  'toString' => 'Function [ <internal:ldap> function ldap_get_dn ] {

  - Parameters [2] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> LDAP\\ResultEntry $entry ]
  }
  - Return [ string|false ]
}
',
);
