<?php

return array (
  'type' => 'function',
  'name' => 'snmp2_getnext',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'snmp2_getnext',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'snmp2_getnext function (php.net)',
        'url' => 'https://www.php.net/manual/function.snmp2-getnext.php',
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
  'toString' => 'Function [ <internal:snmp> function snmp2_getnext ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $hostname ]
    Parameter #1 [ <required> string $community ]
    Parameter #2 [ <required> array|string $object_id ]
    Parameter #3 [ <optional> int $timeout = -1 ]
    Parameter #4 [ <optional> int $retries = -1 ]
  }
  - Return [ mixed ]
}
',
);
