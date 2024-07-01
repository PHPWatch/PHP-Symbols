<?php

return array (
  'type' => 'function',
  'name' => 'snmp3_set',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'snmp3_set',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'snmp3_set function (php.net)',
        'url' => 'https://www.php.net/manual/function.snmp3-set.php',
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
    'nullable' => false,
  ),
  'extension' => 'snmp',
  'toString' => 'Function [ <internal:snmp> function snmp3_set ] {

  - Parameters [12] {
    Parameter #0 [ <required> string $hostname ]
    Parameter #1 [ <required> string $security_name ]
    Parameter #2 [ <required> string $security_level ]
    Parameter #3 [ <required> string $auth_protocol ]
    Parameter #4 [ <required> string $auth_passphrase ]
    Parameter #5 [ <required> string $privacy_protocol ]
    Parameter #6 [ <required> string $privacy_passphrase ]
    Parameter #7 [ <required> array|string $object_id ]
    Parameter #8 [ <required> array|string $type ]
    Parameter #9 [ <required> array|string $value ]
    Parameter #10 [ <optional> int $timeout = -1 ]
    Parameter #11 [ <optional> int $retries = -1 ]
  }
  - Return [ bool ]
}
',
);
