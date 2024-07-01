<?php

return array (
  'type' => 'function',
  'name' => 'pg_send_prepare',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_send_prepare',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_send_prepare function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-send-prepare.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_send_prepare ] {

  - Parameters [3] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <required> string $statement_name ]
    Parameter #2 [ <required> string $query ]
  }
  - Return [ int|bool ]
}
',
);
