<?php

return array (
  'type' => 'function',
  'name' => 'ldap_exop_refresh',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_exop_refresh',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_exop_refresh function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-exop-refresh.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_exop_refresh ] {

  - Parameters [3] {
    Parameter #0 [ <required> $ldap ]
    Parameter #1 [ <required> string $dn ]
    Parameter #2 [ <required> int $ttl ]
  }
  - Return [ int|false ]
}
',
);
