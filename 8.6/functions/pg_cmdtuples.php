<?php

return array (
  'type' => 'function',
  'name' => 'pg_cmdtuples',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_cmdtuples',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_cmdtuples function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-cmdtuples.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_cmdtuples ] {

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
          'message' => 'use pg_affected_rows() instead',
        ),
      ),
    ),
  ),
);
