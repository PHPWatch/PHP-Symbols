<?php

return array (
  'type' => 'function',
  'name' => 'ldap_exop_passwd',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_exop_passwd',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_exop_passwd function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-exop-passwd.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_exop_passwd ] {

  - Parameters [5] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <optional> string $user = "" ]
    Parameter #2 [ <optional> string $old_password = "" ]
    Parameter #3 [ <optional> string $new_password = "" ]
    Parameter #4 [ <optional> &$controls = null ]
  }
  - Return [ string|bool ]
}
',
);
