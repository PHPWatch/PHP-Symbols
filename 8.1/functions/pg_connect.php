<?php

return array (
  'type' => 'function',
  'name' => 'pg_connect',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_connect',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_connect function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-connect.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_connect ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $connection_string ]
    Parameter #1 [ <optional> int $flags = 0 ]
  }
  - Return [ PgSql\\Connection|false ]
}
',
);
