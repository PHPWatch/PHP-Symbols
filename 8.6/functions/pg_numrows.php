<?php

return array (
  'type' => 'function',
  'name' => 'pg_numrows',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_numrows',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_numrows function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-numrows.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_numrows ] {

  - Parameters [1] {
    Parameter #0 [ <required> PgSql\\Result $result ]
  }
  - Return [ int ]
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
          'message' => 'use pg_num_rows() instead',
        ),
      ),
    ),
  ),
);
