<?php

return array (
  'type' => 'function',
  'name' => 'ldap_connect',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_connect',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_connect function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-connect.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_connect ] {

  - Parameters [2] {
    Parameter #0 [ <optional> ?string $uri = null ]
    Parameter #1 [ <optional> int $port = 389 ]
  }
  - Return [ LDAP\\Connection|false ]
}
',
);
