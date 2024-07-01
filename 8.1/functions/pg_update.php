<?php

return array (
  'type' => 'function',
  'name' => 'pg_update',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_update',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_update function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-update.php',
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
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_update ] {

  - Parameters [5] {
    Parameter #0 [ <required> PgSql\\Connection $connection ]
    Parameter #1 [ <required> string $table_name ]
    Parameter #2 [ <required> array $values ]
    Parameter #3 [ <required> array $conditions ]
    Parameter #4 [ <optional> int $flags = PGSQL_DML_EXEC ]
  }
  - Return [ string|bool ]
}
',
);
