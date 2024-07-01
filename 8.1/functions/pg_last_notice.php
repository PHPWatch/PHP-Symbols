<?php

return array (
  'type' => 'function',
  'name' => 'pg_last_notice',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_last_notice',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_last_notice function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-last-notice.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_last_notice ] {

  - Parameters [2] {
    Parameter #0 [ <required> PgSql\\Connection $connection ]
    Parameter #1 [ <optional> int $mode = PGSQL_NOTICE_LAST ]
  }
  - Return [ array|string|bool ]
}
',
);
