<?php

return array (
  'type' => 'function',
  'name' => 'ldap_list',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_list',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_list function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-list.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => NULL,
  'extension' => 'ldap',
  'toString' => 'Function [ <internal:ldap> function ldap_list ] {

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
}
',
);
