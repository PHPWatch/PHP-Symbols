<?php

return array (
  'type' => 'function',
  'name' => 'ldap_add',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_add',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_add function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-add.php',
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
  'extension' => 'ldap',
  'toString' => 'Function [ <internal:ldap> function ldap_add ] {

  - Parameters [4] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> string $dn ]
    Parameter #2 [ <required> array $entry ]
    Parameter #3 [ <optional> ?array $controls = null ]
  }
  - Return [ bool ]
}
',
);
