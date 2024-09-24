<?php

return array (
  'type' => 'function',
  'name' => 'pg_getlastoid',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_getlastoid',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_getlastoid function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-getlastoid.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_getlastoid ] {

  - Parameters [1] {
    Parameter #0 [ <required> PgSql\\Result $result ]
  }
  - Return [ string|int|false ]
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
          'message' => 'use pg_last_oid() instead',
        ),
      ),
    ),
  ),
);
