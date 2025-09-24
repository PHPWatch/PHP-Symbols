<?php

return array (
  'type' => 'function',
  'name' => 'ldap_bind_ext',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ldap_bind_ext',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap_bind_ext function (php.net)',
        'url' => 'https://www.php.net/manual/function.ldap-bind-ext.php',
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
  'toString' => 'Function [ <internal:ldap> function ldap_bind_ext ] {

  - Parameters [4] {
    Parameter #0 [ <required> LDAP\\Connection $ldap ]
    Parameter #1 [ <optional> ?string $dn = null ]
    Parameter #2 [ <optional> ?string $password = null ]
    Parameter #3 [ <optional> ?array $controls = null ]
  }
  - Return [ LDAP\\Result|false ]
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
