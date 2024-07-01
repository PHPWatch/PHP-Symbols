<?php

return array (
  'type' => 'function',
  'name' => 'ldap_exop_sync',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_exop_sync',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_exop_sync function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-exop-sync.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_exop_sync ] {

  - Parameters [6] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> string $request_oid ]
    Parameter #2 [ <optional> ?string $request_data = null ]
    Parameter #3 [ <optional> ?array $controls = NULL ]
    Parameter #4 [ <optional> &$response_data = null ]
    Parameter #5 [ <optional> &$response_oid = null ]
  }
  - Return [ LDAP\\Result|bool ]
}
',
);
