<?php

return array (
  'type' => 'function',
  'name' => 'pg_query',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_query',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_query function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-query.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_query ] {

  - Parameters [2] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> string $query = <default> ]
  }
  - Return [ PgSql\\Result|false ]
}
',
);
