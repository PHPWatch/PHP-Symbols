<?php

return array (
  'type' => 'function',
  'name' => 'ldap_sasl_bind',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_sasl_bind',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_sasl_bind function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-sasl-bind.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'ldap',
  'toString' => 'Function [ <internal:ldap> function ldap_sasl_bind ] {

  - Parameters [8] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <optional> ?string $dn = null ]
    Parameter #2 [ <optional> ?string $password = null ]
    Parameter #3 [ <optional> ?string $mech = null ]
    Parameter #4 [ <optional> ?string $realm = null ]
    Parameter #5 [ <optional> ?string $authc_id = null ]
    Parameter #6 [ <optional> ?string $authz_id = null ]
    Parameter #7 [ <optional> ?string $props = null ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'password' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
    ),
  ),
);
