<?php

return array (
  'type' => 'function',
  'name' => 'snmp2_set',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'snmp2_set',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'snmp2_set function (php.net)',
        'url' => 'https://www.php.net/manual/function.snmp2-set.php',
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
  'extension' => 'snmp',
  'toString' => 'Function [ <internal:snmp> function snmp2_set ] {

  - Parameters [7] {
    Parameter #0 [ <required> string $hostname ]
    Parameter #1 [ <required> string $community ]
    Parameter #2 [ <required> array|string $object_id ]
    Parameter #3 [ <required> array|string $type ]
    Parameter #4 [ <required> array|string $value ]
    Parameter #5 [ <optional> int $timeout = -1 ]
    Parameter #6 [ <optional> int $retries = -1 ]
  }
  - Return [ bool ]
}
',
);
