<?php

return array (
  'type' => 'function',
  'name' => 'ldap_first_reference',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_first_reference',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_first_reference function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-first-reference.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_first_reference ] {

  - Parameters [2] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> LDAP\\Result $result ]
  }
  - Return [ LDAP\\ResultEntry|false ]
}
',
);
