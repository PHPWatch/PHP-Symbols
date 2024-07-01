<?php

return array (
  'type' => 'function',
  'name' => 'pg_loopen',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_loopen',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_loopen function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-loopen.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_loopen ] {

  - Parameters [3] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> $oid = <default> ]
    Parameter #2 [ <optional> string $mode = <default> ]
  }
  - Return [ PgSql\\Lob|false ]
}
',
);
