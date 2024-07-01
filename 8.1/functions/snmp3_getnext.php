<?php

return array (
  'type' => 'function',
  'name' => 'snmp3_getnext',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'snmp3_getnext',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'snmp3_getnext function (php.net)',
        'url' => 'https://www.php.net/manual/function.snmp3-getnext.php',
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
    ReflectionNamedType::__set_state(array(
    )),
    'nullable' => true,
  ),
  'extension' => 'snmp',
  'toString' => 'Function [ <internal:snmp> function snmp3_getnext ] {

  - Parameters [10] {
    Parameter #0 [ <required> string $hostname ]
    Parameter #1 [ <required> string $security_name ]
    Parameter #2 [ <required> string $security_level ]
    Parameter #3 [ <required> string $auth_protocol ]
    Parameter #4 [ <required> string $auth_passphrase ]
    Parameter #5 [ <required> string $privacy_protocol ]
    Parameter #6 [ <required> string $privacy_passphrase ]
    Parameter #7 [ <required> array|string $object_id ]
    Parameter #8 [ <optional> int $timeout = -1 ]
    Parameter #9 [ <optional> int $retries = -1 ]
  }
  - Return [ mixed ]
}
',
);
