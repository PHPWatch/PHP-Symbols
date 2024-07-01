<?php

return array (
  'type' => 'function',
  'name' => 'pg_fetch_assoc',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_fetch_assoc',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_fetch_assoc function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-fetch-assoc.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_fetch_assoc ] {

  - Parameters [2] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <optional> ?int $row = null ]
  }
  - Return [ array|false ]
}
',
);
