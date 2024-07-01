<?php

return array (
  'type' => 'function',
  'name' => 'pg_select',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_select',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_select function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-select.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_select ] {

  - Parameters [5] {
    Parameter #0 [ <required> PgSql\\Connection $connection ]
    Parameter #1 [ <required> string $table_name ]
    Parameter #2 [ <optional> array $conditions = [] ]
    Parameter #3 [ <optional> int $flags = PGSQL_DML_EXEC ]
    Parameter #4 [ <optional> int $mode = PGSQL_ASSOC ]
  }
  - Return [ array|string|false ]
}
',
);
