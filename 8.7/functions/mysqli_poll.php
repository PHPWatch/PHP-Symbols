<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_poll',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_poll',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_poll function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-poll.php',
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
  'extension' => 'mysqli',
  'toString' => 'Function [ <internal:mysqli> function mysqli_poll ] {

  - Parameters [5] {
    Parameter #0 [ <required> ?array &$read ]
    Parameter #1 [ <required> ?array &$error ]
    Parameter #2 [ <required> array &$reject ]
    Parameter #3 [ <required> int $seconds ]
    Parameter #4 [ <optional> int $microseconds = 0 ]
  }
  - Return [ int|false ]
}
',
);
