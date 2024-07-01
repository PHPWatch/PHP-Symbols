<?php

return array (
  'type' => 'function',
  'name' => 'ldap_parse_result',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_parse_result',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_parse_result function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-parse-result.php',
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
    \ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'ldap',
  'toString' => 'Function [ <internal:ldap> function ldap_parse_result ] {

  - Parameters [7] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <required> LDAP\\Result $result ]
    Parameter #2 [ <required> &$error_code ]
    Parameter #3 [ <optional> &$matched_dn = null ]
    Parameter #4 [ <optional> &$error_message = null ]
    Parameter #5 [ <optional> &$referrals = null ]
    Parameter #6 [ <optional> &$controls = null ]
  }
  - Return [ bool ]
}
',
);
