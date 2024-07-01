<?php

return array (
  'type' => 'function',
  'name' => 'ldap_read',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_read',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_read function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-read.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_read ] {

  - Parameters [9] {
    Parameter #0 [ <required> $ldap ]
    Parameter #1 [ <required> array|string $base ]
    Parameter #2 [ <required> array|string $filter ]
    Parameter #3 [ <optional> array $attributes = [] ]
    Parameter #4 [ <optional> int $attributes_only = 0 ]
    Parameter #5 [ <optional> int $sizelimit = -1 ]
    Parameter #6 [ <optional> int $timelimit = -1 ]
    Parameter #7 [ <optional> int $deref = LDAP_DEREF_NEVER ]
    Parameter #8 [ <optional> ?array $controls = null ]
  }
  - Return [ LDAP\\Result|array|false ]
}
',
);
