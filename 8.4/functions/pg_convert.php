<?php

return array (
  'type' => 'function',
  'name' => 'pg_convert',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_convert',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_convert function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-convert.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_convert ] {

  - Parameters [4] {
    Parameter #0 [ <required> PgSql\\Connection $connection ]
    Parameter #1 [ <required> string $table_name ]
    Parameter #2 [ <required> array $values ]
    Parameter #3 [ <optional> int $flags = 0 ]
  }
  - Return [ array|false ]
}
',
);
