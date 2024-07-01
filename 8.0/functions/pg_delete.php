<?php

return array (
  'type' => 'function',
  'name' => 'pg_delete',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_delete',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_delete function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-delete.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_delete ] {

  - Parameters [4] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <required> string $table_name ]
    Parameter #2 [ <required> array $conditions ]
    Parameter #3 [ <optional> int $flags = PGSQL_DML_EXEC ]
  }
  - Return [ string|bool ]
}
',
);
