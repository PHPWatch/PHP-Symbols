<?php

return array (
  'type' => 'function',
  'name' => 'pg_close_stmt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_close_stmt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_close_stmt function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-close-stmt.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_close_stmt ] {

  - Parameters [2] {
    Parameter #0 [ <required> Pgsql\\Connection $connection ]
    Parameter #1 [ <required> string $statement_name ]
  }
  - Return [ PgSql\\Result|false ]
}
',
);
