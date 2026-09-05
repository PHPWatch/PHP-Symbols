<?php

return array (
  'type' => 'function',
  'name' => 'pg_insert',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_insert',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_insert function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-insert.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_insert ] {

  - Parameters [4] {
    Parameter #0 [ <required> PgSql\\Connection $connection ]
    Parameter #1 [ <required> string $table_name ]
    Parameter #2 [ <required> array $values ]
    Parameter #3 [ <optional> int $flags = PGSQL_DML_EXEC ]
  }
  - Return [ PgSql\\Result|string|bool ]
}
',
);
