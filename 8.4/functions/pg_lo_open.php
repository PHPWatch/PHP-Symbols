<?php

return array (
  'type' => 'function',
  'name' => 'pg_lo_open',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_lo_open',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_lo_open function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-lo-open.php',
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
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_lo_open ] {

  - Parameters [3] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> $oid = <default> ]
    Parameter #2 [ <optional> string $mode = <default> ]
  }
  - Return [ PgSql\\Lob|false ]
}
',
);
