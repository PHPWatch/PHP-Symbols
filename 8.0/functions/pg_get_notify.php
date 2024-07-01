<?php

return array (
  'type' => 'function',
  'name' => 'pg_get_notify',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_get_notify',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_get_notify function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-get-notify.php',
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
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_get_notify ] {

  - Parameters [2] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> int $mode = PGSQL_ASSOC ]
  }
  - Return [ array|false ]
}
',
);
