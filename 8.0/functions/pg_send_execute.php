<?php

return array (
  'type' => 'function',
  'name' => 'pg_send_execute',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_send_execute',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_send_execute function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-send-execute.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_send_execute ] {

  - Parameters [3] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <required> string $statement_name ]
    Parameter #2 [ <required> array $params ]
  }
  - Return [ int|bool ]
}
',
);
