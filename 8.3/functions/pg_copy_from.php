<?php

return array (
  'type' => 'function',
  'name' => 'pg_copy_from',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_copy_from',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_copy_from function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-copy-from.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_copy_from ] {

  - Parameters [5] {
    Parameter #0 [ <required> PgSql\\Connection $connection ]
    Parameter #1 [ <required> string $table_name ]
    Parameter #2 [ <required> array $rows ]
    Parameter #3 [ <optional> string $separator = "\\t" ]
    Parameter #4 [ <optional> string $null_as = "\\\\\\\\N" ]
  }
  - Return [ bool ]
}
',
);
