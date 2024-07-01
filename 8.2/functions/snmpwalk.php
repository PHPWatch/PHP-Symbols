<?php

return array (
  'type' => 'function',
  'name' => 'snmpwalk',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'snmpwalk',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'snmpwalk function (php.net)',
        'url' => 'https://www.php.net/manual/function.snmpwalk.php',
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
  'extension' => 'snmp',
  'toString' => 'Function [ <internal:snmp> function snmpwalk ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $hostname ]
    Parameter #1 [ <required> string $community ]
    Parameter #2 [ <required> array|string $object_id ]
    Parameter #3 [ <optional> int $timeout = -1 ]
    Parameter #4 [ <optional> int $retries = -1 ]
  }
  - Return [ array|false ]
}
',
);
