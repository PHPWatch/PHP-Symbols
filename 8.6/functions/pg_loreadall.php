<?php

return array (
  'type' => 'function',
  'name' => 'pg_loreadall',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_loreadall',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_loreadall function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-loreadall.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_loreadall ] {

  - Parameters [1] {
    Parameter #0 [ <required> PgSql\\Lob $lob ]
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
          'message' => 'use pg_lo_read_all() instead',
        ),
      ),
    ),
  ),
);
