<?php

return array (
  'type' => 'function',
  'name' => 'pg_fieldisnull',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_fieldisnull',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_fieldisnull function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-fieldisnull.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_fieldisnull ] {

  - Parameters [3] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <required> $row ]
    Parameter #2 [ <optional> string|int $field = <default> ]
  }
  - Return [ int|false ]
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
          'message' => 'use pg_field_is_null() instead',
        ),
      ),
    ),
  ),
);
