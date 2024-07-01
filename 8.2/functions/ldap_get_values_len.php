<?php

return array (
  'type' => 'function',
  'name' => 'ldap_get_values_len',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_get_values_len',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_get_values_len function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-get-values-len.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_get_values_len ] {

  - Parameters [3] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> LDAP\\ResultEntry $entry ]
    Parameter #2 [ <required> string $attribute ]
  }
  - Return [ array|false ]
}
',
);
