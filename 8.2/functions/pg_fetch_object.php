<?php

return array (
  'type' => 'function',
  'name' => 'pg_fetch_object',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_fetch_object',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_fetch_object function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-fetch-object.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_fetch_object ] {

  - Parameters [4] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <optional> ?int $row = null ]
    Parameter #2 [ <optional> string $class = "stdClass" ]
    Parameter #3 [ <optional> array $constructor_args = [] ]
  }
  - Return [ object|false ]
}
',
);
