<?php

return array (
  'type' => 'function',
  'name' => 'pg_result',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_result',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_result function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-result.php',
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
    'nullable' => true,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_result ] {

  - Parameters [3] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <required> $row ]
    Parameter #2 [ <optional> string|int $field = <default> ]
  }
  - Return [ string|false|null ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.0',
          'message' => 'use pg_fetch_result() instead',
        ),
      ),
    ),
  ),
);
