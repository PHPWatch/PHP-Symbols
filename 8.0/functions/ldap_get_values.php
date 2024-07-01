<?php

return array (
  'type' => 'function',
  'name' => 'ldap_get_values',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_get_values',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_get_values function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-get-values.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_get_values ] {

  - Parameters [3] {
    Parameter #0 [ <required> $ldap ]
    Parameter #1 [ <required> $entry ]
    Parameter #2 [ <required> string $attribute ]
  }
  - Return [ array|false ]
}
',
);
