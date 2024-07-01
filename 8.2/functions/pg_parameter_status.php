<?php

return array (
  'type' => 'function',
  'name' => 'pg_parameter_status',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_parameter_status',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_parameter_status function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-parameter-status.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_parameter_status ] {

  - Parameters [2] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> string $name = <default> ]
  }
  - Return [ string|false ]
}
',
);
