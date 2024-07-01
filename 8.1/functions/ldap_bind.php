<?php

return array (
  'type' => 'function',
  'name' => 'ldap_bind',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_bind',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_bind function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-bind.php',
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
    ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'ldap',
  'toString' => 'Function [ <internal:ldap> function ldap_bind ] {

  - Parameters [3] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <optional> ?string $dn = null ]
    Parameter #2 [ <optional> ?string $password = null ]
  }
  - Return [ bool ]
}
',
);
