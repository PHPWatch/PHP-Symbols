<?php

return array (
  'type' => 'function',
  'name' => 'ldap_next_reference',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_next_reference',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_next_reference function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-next-reference.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_next_reference ] {

  - Parameters [2] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> LDAP\\ResultEntry $entry ]
  }
  - Return [ LDAP\\ResultEntry|false ]
}
',
);
