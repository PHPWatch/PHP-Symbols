<?php

return array (
  'type' => 'function',
  'name' => 'pg_fetch_result',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_fetch_result',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_fetch_result function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-fetch-result.php',
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
    'nullable' => true,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_fetch_result ] {

  - Parameters [3] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <required> $row ]
    Parameter #2 [ <optional> string|int $field = <default> ]
  }
  - Return [ string|false|null ]
}
',
);
