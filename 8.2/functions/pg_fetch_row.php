<?php

return array (
  'type' => 'function',
  'name' => 'pg_fetch_row',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_fetch_row',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_fetch_row function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-fetch-row.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_fetch_row ] {

  - Parameters [3] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <optional> ?int $row = null ]
    Parameter #2 [ <optional> int $mode = PGSQL_NUM ]
  }
  - Return [ array|false ]
}
',
);
