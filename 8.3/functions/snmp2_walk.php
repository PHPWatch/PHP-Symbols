<?php

return array (
  'type' => 'function',
  'name' => 'snmp2_walk',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'snmp2_walk',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'snmp2_walk function (php.net)',
        'url' => 'https://www.php.net/manual/function.snmp2-walk.php',
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
  'toString' => 'Function [ <internal:snmp> function snmp2_walk ] {

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
