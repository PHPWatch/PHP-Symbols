<?php

return array (
  'type' => 'function',
  'name' => 'pg_lo_read',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_lo_read',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_lo_read function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-lo-read.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_lo_read ] {

  - Parameters [2] {
    Parameter #0 [ <required> PgSql\\Lob $lob ]
    Parameter #1 [ <optional> int $length = 8192 ]
  }
  - Return [ string|false ]
}
',
);
