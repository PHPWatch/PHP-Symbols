<?php

return array (
  'type' => 'function',
  'name' => 'pg_meta_data',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_meta_data',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_meta_data function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-meta-data.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_meta_data ] {

  - Parameters [3] {
    Parameter #0 [ <required> PgSql\\Connection $connection ]
    Parameter #1 [ <required> string $table_name ]
    Parameter #2 [ <optional> bool $extended = false ]
  }
  - Return [ array|false ]
}
',
);
