<?php

return array (
  'type' => 'function',
  'name' => 'pg_result_status',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_result_status',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_result_status function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-result-status.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_result_status ] {

  - Parameters [2] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <optional> int $mode = PGSQL_STATUS_LONG ]
  }
  - Return [ string|int ]
}
',
);
