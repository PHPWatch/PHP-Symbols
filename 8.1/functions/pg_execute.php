<?php

return array (
  'type' => 'function',
  'name' => 'pg_execute',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_execute',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_execute function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-execute.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_execute ] {

  - Parameters [3] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <required> $statement_name ]
    Parameter #2 [ <optional> array $params = <default> ]
  }
  - Return [ PgSql\\Result|false ]
}
',
);
