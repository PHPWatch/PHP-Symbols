<?php

return array (
  'type' => 'function',
  'name' => 'ldap_exop',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_exop',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_exop function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-exop.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_exop ] {

  - Parameters [6] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> string $request_oid ]
    Parameter #2 [ <optional> ?string $request_data = null ]
    Parameter #3 [ <optional> ?array $controls = null ]
    Parameter #4 [ <optional> &$response_data = <default> ]
    Parameter #5 [ <optional> &$response_oid = null ]
  }
  - Return [ LDAP\\Result|bool ]
}
',
);
