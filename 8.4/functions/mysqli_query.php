<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_query',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_query',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_query function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-query.php',
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
  'extension' => 'mysqli',
  'toString' => 'Function [ <internal:mysqli> function mysqli_query ] {

  - Parameters [3] {
    Parameter #0 [ <required> mysqli $mysql ]
    Parameter #1 [ <required> string $query ]
    Parameter #2 [ <optional> int $result_mode = MYSQLI_STORE_RESULT ]
  }
  - Return [ mysqli_result|bool ]
}
',
);
