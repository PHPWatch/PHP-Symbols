<?php

return array (
  'type' => 'function',
  'name' => 'pg_send_query_params',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_send_query_params',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_send_query_params function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-send-query-params.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_send_query_params ] {

  - Parameters [3] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <required> string $query ]
    Parameter #2 [ <required> array $params ]
  }
  - Return [ int|bool ]
}
',
);
