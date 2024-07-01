<?php

return array (
  'type' => 'function',
  'name' => 'pg_fetch_array',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_fetch_array',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_fetch_array function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-fetch-array.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_fetch_array ] {

  - Parameters [3] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <optional> ?int $row = null ]
    Parameter #2 [ <optional> int $mode = PGSQL_BOTH ]
  }
  - Return [ array|false ]
}
',
);
