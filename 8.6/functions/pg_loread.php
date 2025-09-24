<?php

return array (
  'type' => 'function',
  'name' => 'pg_loread',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_loread',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_loread function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-loread.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_loread ] {

  - Parameters [2] {
    Parameter #0 [ <required> PgSql\\Lob $lob ]
    Parameter #1 [ <optional> int $length = 8192 ]
  }
  - Return [ string|false ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.0',
          'message' => 'use pg_lo_read() instead',
        ),
      ),
    ),
  ),
);
